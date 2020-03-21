<?php

namespace addons\blog\controller\wxapp;

use addons\blog\library\CommentException;
use think\Config;
use think\Exception;

/**
 * 评论
 */
class Comment extends Base
{

    protected $noNeedLogin = ['*'];

    public function _initialize()
    {
        parent::_initialize();
    }

    /**
     * 评论列表
     */
    public function index()
    {
        $post_id = (int)$this->request->request('post_id/d');
        $page = (int)$this->request->request('page/d', 1);
        Config::set('paginate.page', $page);
        $commentList = \addons\blog\model\Comment::where('post_id', $post_id)
            ->order('createtime', 'desc')
            ->where('status', 'normal')
            ->page($page)->select();
        foreach ($commentList as $index => $item) {
            $item->visible(['id', 'username', 'avatar', 'content', 'comments']);
        }
        $this->success('', ['commentList' => $commentList]);
    }

    /**
     * 发表评论
     */
    public function post()
    {
        try {
            $params = $this->request->post();
            \addons\blog\model\Comment::postComment($params);
        } catch (CommentException $e) {
            if ($e->getCode() == 1) {
                $this->success($e->getMessage(), null, ['token' => $this->request->token()]);
            } else {
                $this->error($e->getMessage(), null, ['token' => $this->request->token()]);
            }
        } catch (Exception $e) {
            $this->error($e->getMessage(), null, ['token' => $this->request->token()]);
        }
        $this->success(__('发表评论成功!'));
    }

}
