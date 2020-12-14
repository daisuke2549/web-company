<?php get_header(); ?>
    <div id="contents">
        <div class="topNavi">
            <div class="topNaviColumn">
                <h2>社長メッセージ</h2>
                <div class="topNaviPhoto"><img src="<?php echo get_template_directory_uri(); ?>/img/sample.png"></div>
                <p>ホームページを御覧いただきありがとうございます。弊社はお客様満足度を最優先いたします。</p>

            </div><!-- /.topNaviColumn -->
            <div class="topNaviColumn">
                <h2>事業内容</h2>
                <div class="topNaviPhoto"><img src="<?php echo get_template_directory_uri(); ?>/img/sample.png"></div>
                <p>事業内容です。あいうえおかきくけこさしすせそたちつてとなにぬねの。</p>
                <p class="topNaviDetail"><a href="service.html">詳しくはこちら</a></p>
            </div><!-- /.topNaviColumn -->
            <div class="topNaviColumn">
                <h2>会社概要</h2>
                <div class="topNaviPhoto"><img src="<?php echo get_template_directory_uri(); ?>/img/sample.png"></div>
                <p>会社概要です。左右のコンテンツでテキスト量が異なっても、下の｢詳しくはこちら｣が揃うようになっています。</p>
                <p class="topNaviDetail"><a href="company.html">詳しくはこちら</a></p>
            </div><!-- /.topNaviColumn -->
        </div><!-- /.topNavi -->
        <div id="conL">
            <div class="information">
                <h2>INFORMATION</h2>
                <dl>
                <?php
                $infoPosts = get_posts('numberposts=3&category=1');
                foreach($infoPosts as $post): ?>
               <dt><?php the_time('Y年m月d日'); ?></dt>
                    <dd>
                    <span class="tab tag_<?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->slug; } ?>"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></span>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>を更新しました。</dd>
                    <?php endforeach; ?>
                    </dd>
                </dl>
            </div><!-- /.information -->


            <div class="information">
                <h2>会社ブログ</h2>
                <dl>
                <?php
                $infoPosts = get_posts('numberposts=3&category=4');
                foreach($infoPosts as $post): ?>
                    <dt><?php the_time('Y年m月d日'); ?></dt>
                    <dd>
                    <div class="b_img">
                    <?php the_post_thumbnail('thumbside'); ?>
                    </div>
                     <div class="b_right">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>を更新しました。</a>
                     </div></dd>
                    <?php endforeach; ?>
                </dl>
            </div><!-- /.information -->

            <div class="submenu">
                <h3>サービス内容</h3>
                <p>ネット事業です。あいうえおかきくけこさしすせそたちつてとなにぬねのあいうえおかきくけこさしすせそたちつてとなにぬねのあいうえおかきくけこさしすせそたちつてとなにぬねの。</p>
                <ul>
                    <li><a href="service.html#s1">ホームページ制作</a></li>
                    <li><a href="service.html#s2">広告代理</a></li>
                </ul>
            </div><!-- /.submenu -->
            <div class="bnrL">
                <ul>
                    <li><a href="index.html"><img src="images/bnr_l.jpg" alt="" /></a></li>
                    <li><a href="index.html"><img src="images/bnr_l.jpg" alt="" /></a></li>
                    <li><a href="index.html"><img src="images/bnr_l.jpg" alt="" /></a></li>
                </ul>
            </div><!-- /.bnrL -->
        </div><!-- /.conL -->
        <div id="conR">
            <div class="submenu">
            <h3>事業内容</h3>
                <h4>ネット事業</h4>
                <ul>
                    <li><a href="service.html#s1">ホームページ制作</a></li>
                    <li><a href="service.html#s2">広告代理</a></li>

                </ul>

            </div><!-- /.bnrR -->
        </div><!-- /.conR -->
    </div><!-- /#contents -->
    <?php get_footer(); ?>
