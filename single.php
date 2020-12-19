<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="imagetoolbar" content="no" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
<link rel="stylesheet" href="/css/style.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<title>Web-company</title>
</head>
<body>
<div id="container-single">
    <div id="header">
    <h1><a href="<?php bloginfo('url'); ?>/index.php">Web制作屋さん</a></h1>
        <div id="menu">
            <ul>
                <li class="home"><a href="<?php bloginfo('url'); ?>/index.php">ホーム</a></li>
                <li><a href="<?php bloginfo('url'); ?>/web-company-company-2/">事業内容</a></li>
                <li><a href="<?php bloginfo('url'); ?>/web-company-company/">会社概要</a></li>
            </ul>
        </div><!-- /#menu -->
    </div><!-- /#header -->
    <div id="contents">
        <div id="conL">
        <?php if(have_posts()): while(have_posts()): the_post();?>
        <h2><?php the_title(); ?></h2>
        <?php the_time('Y年m月d日'); ?>
        <?php the_content(); ?>
       <?php endwhile; endif; ?>
        </div><!-- /#conL -->
    </div><!-- /#contents -->
    <div id="footMenu-single">
        <ul>
                <li class="home"><a href="<?php bloginfo('url'); ?>/index">ホーム</a></li>
                <li><a href="<?php bloginfo('url'); ?>/service">事業内容</a></li>
                <li><a href="<?php bloginfo('url'); ?>/company">会社概要</a></li>
                <li><a href="<?php bloginfo('url'); ?>/contact">お問い合わせ</a></li>
        </ul>
    </div><!-- /#footerMenu -->
    <div id="footer-single">
        <div class="copyright">Copyright made by Web company(Daisuke Sasaki)</div>
    </div><!-- /#footer -->
</div><!-- /#container -->
<div id="pageTop">
    <a href="#">ページのトップへ戻る</a>
</div><!-- /#pageTop -->
</body>
</html>
