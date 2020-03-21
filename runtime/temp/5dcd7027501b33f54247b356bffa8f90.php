<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:71:"E:\phpstudy\PHPTutorial\WWW\jfmblog\addons\blog\view\default\index.html";i:1575298146;s:79:"E:\phpstudy\PHPTutorial\WWW\jfmblog\addons\blog\view\default\common\layout.html";i:1573884462;s:81:"E:\phpstudy\PHPTutorial\WWW\jfmblog\addons\blog\view\default\common\postlist.html";i:1573883754;s:80:"E:\phpstudy\PHPTutorial\WWW\jfmblog\addons\blog\view\default\common\sidebar.html";i:1573883848;}*/ ?>
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
            

<div class="recommend-index">
    <div class="recommend-top">

        <div id="carousel-focus-captions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php $__3XPET4SQ1G__ = \addons\blog\model\Block::getBlockList(["id"=>"block","name"=>"indexfocus","row"=>"5"]); if(is_array($__3XPET4SQ1G__) || $__3XPET4SQ1G__ instanceof \think\Collection || $__3XPET4SQ1G__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__3XPET4SQ1G__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;?>
                    <li data-target="#carousel-focus-captions" data-slide-to="<?php echo $i-1; ?>" class="<?php if($i==1): ?>active<?php endif; ?>"></li>
                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__3XPET4SQ1G__; ?>
            </ol>
            <div class="carousel-inner">
                <?php $__2s65cJbm31__ = \addons\blog\model\Block::getBlockList(["id"=>"block","name"=>"indexfocus","row"=>"5"]); if(is_array($__2s65cJbm31__) || $__2s65cJbm31__ instanceof \think\Collection || $__2s65cJbm31__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__2s65cJbm31__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;?>
                    <div class="carousel-item <?php if($i==1): ?>active<?php endif; ?>">
                        <a href="<?php echo $block['url']; ?>">
                            <img class="d-block w-100" src="<?php echo cdnurl($block['image']); ?>" alt="<?php echo $block['title']; ?>">
                        </a>
                    </div>
                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__2s65cJbm31__; ?>
            </div>
            <a class="carousel-control-prev" href="#carousel-focus-captions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-focus-captions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


    </div>
    <div class="recommend-bottom">
        <?php $__3EJZqy7gWx__ = \addons\blog\model\Block::getBlockList(["id"=>"block","name"=>"indexsmallfocus","row"=>"4"]); if(is_array($__3EJZqy7gWx__) || $__3EJZqy7gWx__ instanceof \think\Collection || $__3EJZqy7gWx__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__3EJZqy7gWx__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;?>
        <div class="recommend-item">
            <a href="<?php echo $block['url']; ?>"><img src="<?php echo cdnurl($block['image']); ?>" class="img-fluid" alt="<?php echo $block['title']; ?>"></a>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__3EJZqy7gWx__; ?>
    </div>

</div>

<?php if(is_array($postlist) || $postlist instanceof \think\Collection || $postlist instanceof \think\Paginator): $i = 0; $__LIST__ = $postlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$post): $mod = ($i % 2 );++$i;?>
<div class="cl-card">
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-12 cl-card-image"><a href="<?php echo $post['url']; ?>"><img src="<?php echo $post['thumb']; ?>" class="img-fluid" alt=""></a></div>
        <div class="col-lg-9 col-md-8 col-sm-12 cl-card-main">
            <h3 class="cl-card-main-title"><a href="<?php echo $post['url']; ?>"><?php echo $post['title']; ?></a></h3>
            <div class="cl-card-main-info"><?php echo $post['summary']; ?></div>
            <div class="cl-card-more"><a href="<?php echo $post['url']; ?>">阅读更多...</a></div>
        </div>
    </div>
</div>
<?php endforeach; endif; else: echo "" ;endif; ?>

<div class="pager text-center">
        <?php echo $postlist->render(); ?>
</div>

<?php if($postlist->isEmpty()): ?>
<div class="text-center">
    暂未数据
</div>
<?php endif; ?>

        
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
            <?php $__C2ORHafgWP__ = \addons\blog\model\Post::getPostList(["row"=>"10","id"=>"item","orderby"=>"createtime"]); if(is_array($__C2ORHafgWP__) || $__C2ORHafgWP__ instanceof \think\Collection || $__C2ORHafgWP__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__C2ORHafgWP__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
            <li><a href="<?php echo $item['url']; ?>"><i class="fa fa-angle-right" aria-hidden="true"></i><?php echo $item['title']; ?></a></li>
            <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__C2ORHafgWP__; ?>
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
            <?php $__LdjSGE7hpU__ = \addons\blog\model\Post::getPostList(["flag"=>"recommend","row"=>"10","id"=>"item"]); if(is_array($__LdjSGE7hpU__) || $__LdjSGE7hpU__ instanceof \think\Collection || $__LdjSGE7hpU__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__LdjSGE7hpU__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
            <li><a href="<?php echo $item['url']; ?>"><i class="fa fa-angle-right" aria-hidden="true"></i><?php echo $item['title']; ?></a></li>
            <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__LdjSGE7hpU__; ?>
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