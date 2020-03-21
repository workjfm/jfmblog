<?php

return array (
  0 => 
  array (
    'name' => 'name',
    'title' => '博客名称',
    'type' => 'string',
    'content' => 
    array (
    ),
    'value' => 'jfmblog',
    'rule' => 'required',
    'msg' => '',
    'tip' => '',
    'ok' => '',
    'extend' => '',
  ),
  1 => 
  array (
    'name' => 'enname',
    'title' => '博客英文名称',
    'type' => 'string',
    'content' => 
    array (
    ),
    'value' => 'jfmblog',
    'rule' => 'required',
    'msg' => '',
    'tip' => '',
    'ok' => '',
    'extend' => '',
  ),
  2 => 
  array (
    'name' => 'theme',
    'title' => '皮肤名称',
    'type' => 'string',
    'content' => 
    array (
    ),
    'value' => 'default',
    'rule' => 'required',
    'msg' => '',
    'tip' => '',
    'ok' => '',
    'extend' => '',
  ),
  3 => 
  array (
    'name' => 'keywords',
    'title' => '关键字',
    'type' => 'string',
    'content' => 
    array (
    ),
    'value' => 'jfmblog,blog,jfm',
    'rule' => 'required',
    'msg' => '',
    'tip' => '',
    'ok' => '',
    'extend' => '',
  ),
  4 => 
  array (
    'name' => 'description',
    'title' => '描述',
    'type' => 'string',
    'content' => 
    array (
    ),
    'value' => 'jfmblog',
    'rule' => 'required',
    'msg' => '',
    'tip' => '',
    'ok' => '',
    'extend' => '',
  ),
  5 => 
  array (
    'name' => 'intro',
    'title' => '个人简介',
    'type' => 'text',
    'content' => 
    array (
    ),
    'value' => 'jfmblog',
    'rule' => 'required',
    'msg' => '',
    'tip' => '',
    'ok' => '',
    'extend' => '',
  ),
  6 => 
  array (
    'name' => 'listpagesize',
    'title' => '列表每页显示数量',
    'type' => 'number',
    'content' => 
    array (
    ),
    'value' => '10',
    'rule' => 'required',
    'msg' => '',
    'tip' => '',
    'ok' => '',
    'extend' => '',
  ),
  7 => 
  array (
    'name' => 'commentpagesize',
    'title' => '评论每页显示数量',
    'type' => 'number',
    'content' => 
    array (
    ),
    'value' => '10',
    'rule' => 'required',
    'msg' => '',
    'tip' => '',
    'ok' => '',
    'extend' => '',
  ),
  8 => 
  array (
    'name' => 'avatar',
    'title' => '头像',
    'type' => 'image',
    'content' => 
    array (
    ),
    'value' => '/assets/addons/blog/img/avatar.png',
    'rule' => 'required',
    'msg' => '',
    'tip' => '',
    'ok' => '',
    'extend' => '',
  ),
  9 => 
  array (
    'name' => 'donate',
    'title' => '打赏图片',
    'type' => 'image',
    'content' => 
    array (
    ),
    'value' => '/assets/addons/blog/img/qrcode.png',
    'rule' => 'required',
    'msg' => '',
    'tip' => '',
    'ok' => '',
    'extend' => '',
  ),
  10 => 
  array (
    'name' => 'logo',
    'title' => 'Logo图片',
    'type' => 'image',
    'content' => 
    array (
    ),
    'value' => '/assets/addons/blog/img/logo.jpg',
    'rule' => 'required',
    'msg' => '',
    'tip' => '',
    'ok' => '',
    'extend' => '',
  ),
  11 => 
  array (
    'name' => 'background',
    'title' => '背景图片',
    'type' => 'image',
    'content' => 
    array (
    ),
    'value' => 'https://cdn.fastadmin.net/uploads/20180507/1a81b9aaa3d52367b02b844e6437cf74.jpg',
    'rule' => 'required',
    'msg' => '',
    'tip' => '',
    'ok' => '',
    'extend' => '',
  ),
  12 => 
  array (
    'name' => 'copyright',
    'title' => '底部版权信息',
    'type' => 'text',
    'content' => 
    array (
    ),
    'value' => 'Copyright @ 2017~2019 Theme design by jeanstudio',
    'rule' => '',
    'msg' => '',
    'tip' => '',
    'ok' => '',
    'extend' => '',
  ),
  13 => 
  array (
    'name' => 'domain',
    'title' => '绑定二级域名前缀',
    'type' => 'string',
    'content' => 
    array (
    ),
    'value' => '',
    'rule' => '',
    'msg' => '',
    'tip' => '',
    'ok' => '',
    'extend' => '',
  ),
  14 => 
  array (
    'name' => 'iscommentaudit',
    'title' => '发表评论审核',
    'type' => 'radio',
    'content' => 
    array (
      1 => '全部审核',
      0 => '无需审核',
      -1 => '仅含有过滤词时审核',
    ),
    'value' => '-1',
    'rule' => 'required',
    'msg' => '',
    'tip' => '',
    'ok' => '',
    'extend' => '',
  ),
  15 => 
  array (
    'name' => 'audittype',
    'title' => '审核方式',
    'type' => 'radio',
    'content' => 
    array (
      'local' => '本地',
      'baiduyun' => '百度云',
    ),
    'value' => 'local',
    'rule' => 'required',
    'msg' => '',
    'tip' => '如果启用百度云，请输入百度云AI平台应用的AK和SK',
    'ok' => '',
    'extend' => '',
  ),
  16 => 
  array (
    'name' => 'aip_appid',
    'title' => '百度AI平台应用Appid',
    'type' => 'string',
    'content' => 
    array (
    ),
    'value' => '',
    'rule' => '',
    'msg' => '',
    'tip' => '百度云AI开放平台应用AppId',
    'ok' => '',
    'extend' => '',
  ),
  17 => 
  array (
    'name' => 'aip_apikey',
    'title' => '百度AI平台应用Apikey',
    'type' => 'string',
    'content' => 
    array (
    ),
    'value' => '',
    'rule' => '',
    'msg' => '',
    'tip' => '百度云AI开放平台应用ApiKey',
    'ok' => '',
    'extend' => '',
  ),
  18 => 
  array (
    'name' => 'aip_secretkey',
    'title' => '百度AI平台应用Secretkey',
    'type' => 'string',
    'content' => 
    array (
    ),
    'value' => '',
    'rule' => '',
    'msg' => '',
    'tip' => '百度云AI开放平台应用Secretkey',
    'ok' => '',
    'extend' => '',
  ),
  19 => 
  array (
    'name' => 'rewrite',
    'title' => '伪静态',
    'type' => 'array',
    'content' => 
    array (
    ),
    'value' => 
    array (
      'index/index' => '/$',
      'post/index' => '/p/[:id]',
      'category/index' => '/c/[:id]',
      'archive/index' => '/archive',
    ),
    'rule' => 'required',
    'msg' => '',
    'tip' => '',
    'ok' => '',
    'extend' => '',
  ),
);
