<?php

namespace addons\blog\controller;

use addons\blog\model\Category;
use addons\blog\model\Comment;
use addons\blog\model\Post;
use think\Paginator;

/**
 * 博客首页
 */
class Index extends Base
{

    public function _initialize()
    {
        parent::_initialize();
    }

    public function index()
    {
        $postlist = Post::where(['status' => 'normal'])
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
        return $this->view->fetch('/index');
    }

}
