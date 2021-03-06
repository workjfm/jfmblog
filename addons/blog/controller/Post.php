<?php

namespace addons\blog\controller;

use addons\blog\model\Category;
use addons\blog\model\Comment;
use addons\blog\model\Post as PostModel;

/**
 * 博客详情
 */
class Post extends Base
{

    public function index()
    {
        $id = (int)$this->request->param('id');
        $post = PostModel::get($id);
        if (!$post || $post['status'] == 'hidden') {
            $this->error("日志未找到");
        }
        $post->setInc('views');

        $category = Category::get($post['category_id']);

        $commentlist = Comment::where(['post_id' => $id, 'pid' => 0, 'status' => 'normal'])
            ->with('sublist')
            ->order('id desc')
            ->paginate($this->view->config['commentpagesize']);

        $this->view->assign("post", $post);
        $this->view->assign("category", $category);
        $this->view->assign("commentlist", $commentlist);
        $this->view->assign("title", $post['title']);
        $this->view->assign("keywords", $post['keywords']);
        $this->view->assign("description", $post['description']);
        return $this->view->fetch('/post');
    }

}
