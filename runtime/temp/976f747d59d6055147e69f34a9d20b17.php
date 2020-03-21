<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:70:"E:\phpstudy\PHPTutorial\WWW\jfmblog\addons\blog\view\default\post.html";i:1583382980;s:79:"E:\phpstudy\PHPTutorial\WWW\jfmblog\addons\blog\view\default\common\layout.html";i:1573884462;s:84:"E:\phpstudy\PHPTutorial\WWW\jfmblog\addons\blog\view\default\common\commentlist.html";i:1573880401;s:80:"E:\phpstudy\PHPTutorial\WWW\jfmblog\addons\blog\view\default\common\sidebar.html";i:1573883848;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1">
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta name="renderer" content="webkit">
    <title><?php echo isset($title)?$title:'首页'; ?> - <?php echo $site['name']; ?></title>
    <meta name="keywords" content="<?php echo isset($keywords)?$title:''; ?>"/>
    <meta name="description" content="<?php echo isset($description)?$title:''; ?>"/>

    <link rel="stylesheet" media="screen" href="/assets/addons/blog/default/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" media="screen" href="/assets/libs/font-awesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" media="screen" href="/assets/addons/blog/default/css/cl-css.css?v=<?php echo $site['version']; ?>"/>

</head>
<body>
<div class="cl-header container-fluid">
    <div class="header-content container px-0">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="<?php echo addon_url('blog/index/index','',false); ?>">
                <img src="<?php echo cdnurl($config['logo']); ?>" height="72">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item <?php echo request()->controller()=='index'?'active':''; ?>">
                        <a class="nav-link" href="<?php echo addon_url('blog/index/index','',false); ?>">首页</a>
                    </li>
                    <li class="nav-item dropdown <?php echo request()->controller()=='category'?'active':''; ?>" id="category">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:">
                            分类 <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <?php if(is_array($categorylist) || $categorylist instanceof \think\Collection || $categorylist instanceof \think\Paginator): if( count($categorylist)==0 ) : echo "" ;else: foreach($categorylist as $key=>$cat): ?>
                            <li class="<?php echo isset($category)&&$category['id']==$cat['id']?'active':''; ?>"><a href="<?php echo $cat['url']; ?>"><?php echo $cat['name']; ?></a></li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </li>
                    <li class="nav-item <?php echo request()->controller()=='archive'?'active':''; ?>">
                        <a class="nav-link" href="<?php echo addon_url('blog/archive/index'); ?>">归档</a>
                    </li>
                    <li class="nav-item <?php echo request()->controller()=='post'&&isset($post)&&$post['id']==1?'active':''; ?>">
                        <a class="nav-link" href="<?php echo addon_url('blog/post/index', [':id'=>1]); ?>">关于我</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-9 cl-left">
            
<div class="cl-artical-content">
    <h2 class="cl-artical-title"><?php echo $post['title']; ?></h2>
    <div class="cl-card-tag">
        <div><a href="<?php echo $category['url']; ?>" class="text-muted"><?php echo $category['name']; ?></a> / <span><?php echo $post['views']; ?></span>人浏览 / <span><?php echo $post['comments']; ?></span>人评论</div>
    </div>
    <div class="cl-artical">
        <?php echo $post['content']; ?>
    </div>

    <!-- 分享 -->
    <div class="floatbar">
        <a href="<?php echo addon_url('blog'); ?>"><i class="fa fa-home"></i></a>
        <a href="#comments"><i class="fa fa-comment"></i></a>
        <a href="#post"><i class="fa fa-arrow-up"></i></a>
    </div>
    <!-- 扫二维码 -->
    <div class="qcode text-center">
        <img src="<?php echo cdnurl($config['donate']); ?>" style="width:205px; height: 205px;" alt="">
        <p>感谢博主，喝杯咖啡~</p>
    </div>
</div>

<div class="recommend-panel">
    <h4 class="right-card-title px-0">相关文章</h4>
    <div class="card-deck">
        <?php $__IkzsMBJe3Z__ = \addons\blog\model\Post::getPostList(["row"=>"3","id"=>"item"]); if(is_array($__IkzsMBJe3Z__) || $__IkzsMBJe3Z__ instanceof \think\Collection || $__IkzsMBJe3Z__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__IkzsMBJe3Z__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
        <div class="card ll-panel">
            <a class="recommend-panel-link" href="<?php echo $item['url']; ?>">
                <div class="recommend-panel-top">
                    <img src="<?php echo cdnurl($item['thumb']); ?>" class="img-fluid" alt="">
                </div>
                <div class="recommend-panel-bottom">
                    <?php echo $item['title']; ?>
                    <div class="text-muted small"><?php echo human_date($item['createtime']); ?></div>
                </div>
            </a>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__IkzsMBJe3Z__; ?>
    </div>
</div>

<div class="comment">
    <div id="comments" class="pt-3">
        <h3><span id="commentcount"><?php echo $post['comments']; ?></span> 条评论</h3>
        <div class="commentlist">
            <?php if(is_array($commentlist) || $commentlist instanceof \think\Collection || $commentlist instanceof \think\Paginator): $i = 0; $__LIST__ = $commentlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$comment): $mod = ($i % 2 );++$i;?>
<div class="comment-panel" id="comment-<?php echo $comment['id']; ?>">
    <div class="comment-panel-portrait">
        <img src="<?php echo $comment['avatar']; ?>" class="img-fluid rounded-circle" alt="">
    </div>
    <div class="comment-panel-content">
        <div class="comment-panel-content-item">
            <div class="comment-author"><?php echo $comment['username']; ?></div>
            <div><?php echo human_date($comment['createtime']); ?></div>
        </div>
        <div class="comment-panel-content-main"><?php echo $comment['content']; ?></div>
        <?php if(is_array($comment['sublist']) || $comment['sublist'] instanceof \think\Collection || $comment['sublist'] instanceof \think\Paginator): $i = 0; $__LIST__ = $comment['sublist'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$subcomment): $mod = ($i % 2 );++$i;?>
        <div class="comment-secondary-panel" id="comment-<?php echo $subcomment['id']; ?>">
            <span class="triangle-icon"><i class="fa fa-sort-asc" aria-hidden="true"></i></span>
            <div class="comment-panel-content">
                <div class="comment-panel-content-item">
                    <div class="comment-author"><?php echo $subcomment['username']; ?></div>
                    <div><?php echo human_date($subcomment['createtime']); ?></div>
                </div>
                <div class="comment-panel-content-main"><?php echo $subcomment['content']; ?></div>
            </div>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <div class="text-primary"><a href="javascript:;" rel="<?php echo $comment['id']; ?>" title="@<?php echo $comment['username']; ?> " class="reply">回复</a></div>
</div>
<?php endforeach; endif; else: echo "" ;endif; if($commentlist->isEmpty()): ?>
<p class="text-muted">
    还没有人发表评论
</p>
<?php endif; ?>
<div class="pager mt-3">
    <?php echo $commentlist->render(); ?>
</div>
        </div>
    </div>
    <div id="respond" class="pt-3">
        <h3>发表评论 <a href="javascript:;" style="display:none;">取消回复</a></h3>
        <form class="cl-comment-from" action="" method="post" id="postform">
            <?php echo token(); ?>
            <input type="hidden" name="post_id" id="post_id" value="<?php echo $post['id']; ?>"/>
            <input type="hidden" name="pid" id="pid" value="0"/>
            <p><input type="text" class="input" name="username" id="username" value="" size="22" tabindex="1"/>
                <label for="username">
                    <small>名称 (必须)</small>
                </label>
            </p>
            <p><input type="text" class="input" name="email" id="email" value="" size="22" tabindex="2"/>
                <label for="email">
                    <small>邮件地址 (不会被公开) (必须)</small>
                </label>
            </p>
            <p><input type="text" class="input" name="website" id="website" value="" size="22" tabindex="3"/>
                <label for="website">
                    <small>网站或博客</small>
                </label>
            </p>
            <p><textarea name="content" class="form-control" id="commentcontent" cols="6" rows="5" tabindex="4"></textarea></p>
            <p><input name="submit" type="submit" id="submit" tabindex="5" value="提交评论(Ctrl+回车)" class="btn btn-primary"/><span id="actiontips" style="margin-left:5px;"></span></p>
            <p>
                <input name="rememberme" type="checkbox" class="checkbox" tabindex="6" checked value="1"/> 记住我的信息，方便下次评论 <br/>
                <input name="subscribe" type="checkbox" class="checkbox" tabindex="7" checked value="1"/> 有人回复时邮件通知我
            </p>
        </form>
    </div>
</div>

<!--@formatter:off-->
<script>
    var post_id = <?php echo $post['id']; ?>;
    var postcomment_url = "<?php echo addon_url('blog/comment/post'); ?>";
    var getcommentlist_url = "<?php echo addon_url('blog/comment/index'); ?>";
</script>
<!--@formatter:on-->

<script data-render="script" src="/assets/addons/blog/default/js/main.js"></script>
<script data-render="script" src="/assets/addons/blog/default/js/post.js"></script>
        </div>
        <div class="col-md-3 cl-right">
            <div class="right-card">

    <div class="right-card-main">
        <div class="right-card-title">请喝咖啡</div>
        <div class="cl-code">
            <img src="<?php echo cdnurl($config['donate']); ?>" class="img-fluid" alt="">
            <p>感谢博主，喝杯咖啡~</p>
        </div>

    </div>
</div>

<div class="right-card">

    <div class="right-card-main">
        <div class="right-card-title">最新文章</div>
        <ul class="right-recommended-list">
            <?php $__XdSlWKEafG__ = \addons\blog\model\Post::getPostList(["row"=>"10","id"=>"item","orderby"=>"createtime"]); if(is_array($__XdSlWKEafG__) || $__XdSlWKEafG__ instanceof \think\Collection || $__XdSlWKEafG__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__XdSlWKEafG__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
            <li><a href="<?php echo $item['url']; ?>"><i class="fa fa-angle-right" aria-hidden="true"></i><?php echo $item['title']; ?></a></li>
            <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__XdSlWKEafG__; ?>
        </ul>
    </div>
</div>

<!-- <div class="right-card">
    <div class="right-card-main">
        <a href="/"><img src="https://cdn.fastadmin.net/assets/addons/ask/img/sidebar/howto.png" class="img-responsive"/></a>
    </div>
</div> -->

<div class="right-card">

    <div class="right-card-main">
        <div class="right-card-title">推荐文章</div>
        <ul class="right-recommended-list">
            <?php $__HtJa21fyRq__ = \addons\blog\model\Post::getPostList(["flag"=>"recommend","row"=>"10","id"=>"item"]); if(is_array($__HtJa21fyRq__) || $__HtJa21fyRq__ instanceof \think\Collection || $__HtJa21fyRq__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__HtJa21fyRq__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
            <li><a href="<?php echo $item['url']; ?>"><i class="fa fa-angle-right" aria-hidden="true"></i><?php echo $item['title']; ?></a></li>
            <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__HtJa21fyRq__; ?>
        </ul>
    </div>
</div>

<!-- <div class="right-card">
    <div class="right-card-main">
        <a href="/"><img src="https://cdn.fastadmin.net/uploads/store/enterprisehost.png" class="img-responsive"/></a>
    </div>
</div> -->

        </div>
    </div>

</div>

<div class="container-fluid cl-footer">
    <div class="container">
        <p class="cl-copyright"><?php echo $config['copyright']; ?></p>
    </div>
</div>


<script type="text/javascript" src="/assets/libs/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="/assets/addons/blog/default/bootstrap/js/bootstrap.min.js"></script>

{__SCRIPT__}
</body>
</html>