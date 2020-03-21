<?php

namespace addons\blog\controller;

use addons\blog\model\Category as CategoryModel;
use addons\blog\model\Comment;
use addons\blog\model\Post;
use think\Paginator;

/**
 * 博客分类
 */
class Category extends Base
{

    public function index()
    {
        $id = (int)$this->request->param('id');
        $category = CategoryModel::get($id);
        if (!$category || $category['status'] == 'hidden') {
            $this->error("分类未找到");
        }

        $postlist = Post::where(['status' => 'normal'])
            ->where('category_id', $category['id'])
            ->with('category')
            ->order('weigh desc,id desc')
            ->paginate($this->view->config['listpagesize']);
        
        $page = Paginator::getCurrentPage();
        $urls = $postlist->getUrlRange($page - 1, $page + 1);
        $prevurl = $page == 1 ? '' : array_shift($urls);
        $nexturl = $page == $postlist->lastPage() ? '' : array_pop($urls);

        $this->view->assign("postlist", $postlist);
        $this->view->assign('prevurl', $prevurl);
        $this->view->assign('nexturl', $nexturl);
        $this->view->assign('category', $category);
        $this->view->assign('title', $category['name']);
        return $this->view->fetch('/category');
    }

}
