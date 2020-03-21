<?php

namespace addons\blog\controller;

use addons\blog\model\Comment as CommentModel;
use addons\blog\library\CommentException;
use think\addons\Controller;
use think\Exception;

/**
 * 博客评论
 */
class Comment extends Base
{

    protected $model = null;

    public function _initialize()
    {
        parent::_initialize();
    }

    public function index()
    {
        $post_id = $this->request->get('post_id');
        $commentlist = CommentModel::where(['post_id' => $post_id, 'pid' => 0, 'status' => 'normal'])
            ->with('sublist')
            ->order('id desc')
            ->paginate($this->view->config['commentpagesize']);
        $this->view->assign("commentlist", $commentlist);
        return $this->view->fetch('/common/commentlist');
    }

    /**
     * 发表评论
     */
    public function post()
    {
        try {
            $params = $this->request->post();
            CommentModel::postComment($params);
        } catch (CommentException $e) {
            if ($e->getCode() == 1) {
                $this->success($e->getMessage(), null, ['token' => $this->request->token()]);
            } else {
                $this->error($e->getMessage(), null, ['token' => $this->request->token()]);
            }
        } catch (Exception $e) {
            $this->error($e->getMessage(), null, ['token' => $this->request->token()]);
        }
        $this->success(__('发表评论成功！'));
    }

    /**
     * 取消评论订阅
     */
    public function unsubscribe()
    {
        $id = (int)$this->request->param('id');
        $key = $this->request->param('key');
        $comment = Comment::get($id);
        if (!$comment) {
            $this->error("日志评论未找到");
        }
        if ($key !== md5($comment['id'] . $comment['email'])) {
            $this->error("无法进行该操作");
        }
        if (!$comment['subscribe']) {
            $this->error("评论已经取消订阅，请勿重复操作");
        }
        $comment->subscribe = 0;
        $comment->save();
        $this->success('取消评论订阅成功');
    }

}