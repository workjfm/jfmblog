<?php

return array (
  'autoload' => false,
  'hooks' => 
  array (
    'response_send' => 
    array (
      0 => 'blog',
    ),
  ),
  'route' => 
  array (
    '/$' => 'blog/index/index',
    '/p/[:id]' => 'blog/post/index',
    '/c/[:id]' => 'blog/category/index',
    '/archive' => 'blog/archive/index',
  ),
);