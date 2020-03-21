<?php

namespace addons\blog\controller\wxapp;

use addons\blog\model\Category;
use addons\blog\model\Post as PostModel;

/**
 * 单页
 */
class Page extends Base
{

    protected $noNeedLogin = ['*'];

    public function _initialize()
    {
        parent::_initialize();
    }

    /**
     * 关于我
     */
    public function aboutme()
    {
        $config = get_addon_config('blog');
        $my = [
            'avatar' => cdnurl($config['avatar'], true),
            'name'   => $config['name'],
            'enname' => $config['enname'],
            'intro'  => $config['intro'],
        ];
        $this->success('', ['my' => $my]);
    }

}