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
<script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/common.js"></script>
<script type="text/javascript">
$(function() {
    $('#slide').slideshow({
        autoSlide    : true,
        effect       : 'fade',
        type         : 'repeat',
        interval     : 3000,
        duration     : 500,
        imgHoverStop : true,
        navHoverStop : true
    });
    $(window).load(function() {
        $(".topNaviColumn").uniformHeight();
    });
});
</script>
<title>Web-company</title>
</head>
<body>
<div id="container">
    <div id="header">
    <h1><a href="<?php bloginfo('url'); ?>/index.php">Web制作屋さん</a></h1>
        <div id="menu">
            <ul>
            <?php wp_nav_menu( array(
   'theme_location'=>'place_global', 
            'container'     =>'', 
            'menu_class'    =>'',
            'items_wrap' => '%3$s',
          ));
    ?>
            </ul>
        </div><!-- /#menu -->
    </div><!-- /#header -->
    <div id="slide">
        <ul class="slideInner">
            <li><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/icatch01.jpg" alt="" width="940" height="300" /></li>
            <li><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/icatch02.jpg" alt="" width="940" height="300" /></li>
            <li><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/icatch03.jpg" alt="" width="940" height="300" /></li>
        </ul>
         <div class="slidePrev"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/nav_prev_on.png" alt="前へ"></div>
         <div class="slideNext"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/nav_next_on.png" alt="次へ"></div>
         <div class="controlNav"></div>
    </div><!-- /#slide -->
    <?php wp_head(); ?>