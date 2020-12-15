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
<div id="container">
    <div id="header">
        <h1><a href="index.html"><img src="images/logo.png" alt="Web company" /></a></h1>
        <div id="menu">
            <ul>
                <li class="home"><a href="index.php">ホーム</a></li>
                <li><a href="service.html">事業内容</a></li>
                <li><a href="company.html">会社概要</a></li>
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
        <a href="<?php bloginfo('url'); ?>contact.php"><button class="btn1">お問い合わせ</button></a>
        </div><!-- /#conL -->
    </div><!-- /#contents -->
    <?php get_footer(); ?>
        </div><!-- /#conL -->
    </div><!-- /#contents -->
    <?php get_footer(); ?>
