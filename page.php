<?php get_header(); ?>
    <div id="contents">
        <div id="conL">
            <h2><?php the_title(); ?></h2>
            <?php if(have_posts()): while(have_posts()): the_post();?>
            <?php the_content(); ?>
            <?php endwhile; endif; ?>
            <a href="contact.html"><button class="btn1">お問い合わせ</button></a>
</div><!-- /#conL -->
<div id="conR">
    <div class="submenu">
        <h3>事業内容</h3>
        <h4>ネット事業</h4>
        <ul>
            <li><a href="service.html#s1">ホームページ制作</a></li>
            <li><a href="service.html#s2">広告代理</a></li>

        </ul>
    </div><!-- /.submenu -->
</div><!-- /#conR -->
</div><!-- /#contents -->
<div id="footMenu">
<ul>
    <li><a href="sample.html">事業内容</a></li>
    <li><a href="sample.html">会社概要</a></li>
    <li><a href="index.html">採用情報</a></li>
    <li><a href="index.html">投資家情報</a></li>
    <li><a href="index.html">お問い合わせ</a></li>
    <li><a href="index.html">グループ会社</a></li>
</ul>
</div><!-- /#footerMenu -->
<div id="footer">
<div class="copyright">Copyright &copy; 2013 YOUR SITE NAME All Rights Reserved.</div>
</div><!-- /#footer -->
</div><!-- /#container -->
<div id="pageTop">
<a href="#">ページのトップへ戻る</a>
</div><!-- /#pageTop -->
</body>
</html>