<?php get_header(); ?>
    <div id="contents">
        <div class="topNavi">
            <div class="topNaviColumn">
                <h2>社長メッセージ</h2>
                <div class="topNaviPhoto"><img src="<?php echo get_template_directory_uri(); ?>/img/mypicture.png" alt="私の写真" width="300" height="150"></div>
                <p>弊社ホームページを御覧いただきありがとうございます。弊社はお客様満足度を最優先にサービスを提供いたします。</p>

            </div><!-- /.topNaviColumn -->
            <div class="topNaviColumn">
                <h2>事業内容</h2>
                <div class="topNaviPhoto"><img src="<?php echo get_template_directory_uri(); ?>/img/web-design.jpg" alt="事業内容" width="300" height="150"></div>
                <p>HTML,CSS,JavaScriptでのコーディング、Wordpressでのサイト制作等、Web制作を全般的に行っております。</p>
                <p class="topNaviDetail"><a href="<?php bloginfo('url'); ?>/web-company-company-2/">詳しくはこちら</a></p>
            </div>
            <div class="topNaviColumn">
                <h2>会社概要</h2>
                <div class="topNaviPhoto"><img src="<?php echo get_template_directory_uri(); ?>/img/company.jpg" alt="会社の概要" width="300" height="150"></div>
                <p>弊社の会社概要について紹介しております。Web系をメインに事業を行うスタートアップカンパニーです。</p>
                <p class="topNaviDetail"><a href="<?php bloginfo('url'); ?>/web-company-company">詳しくはこちら</a></p>
            </div><!-- /.topNaviColumn -->
        </div><!-- /.topNavi -->
        <div id="conL">
            <div class="information">
                <h2>INFORMATION</h2>
                <dl>
                <?php
                $infoPosts = get_posts('numberposts=3&category=5');
                foreach($infoPosts as $post): ?>
               <dt><?php the_time('Y年m月d日'); ?></dt>
                    <dd>
                    <span class="tab tag_<?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->slug; } ?>"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></span>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>を掲載しました。</dd>
                    <?php endforeach; ?>
                    </dd>
                </dl>
            </div><!-- /.information -->


            <div class="information">
                <h2>会社ブログ</h2>
                <dl>
                <?php
                $infoPosts = get_posts('numberposts=3&category=2');
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
                <p>Web制作、SEO対策、ブログの開設サポート等幅広くサービスを展開しています。</p>
                <ul>
                    <li><a href="<?php bloginfo('url'); ?>/web-company-company-2/">事業内容詳細はこちら</a></li>
                </ul>
            </div><!-- /.submenu -->
            <div class="bnrL">
                <ul>

                </ul>
            </div><!-- /.bnrL -->
        </div><!-- /.conL -->

        <div id="conR">
            <div class="submenu">
            <h3>事業内容</h3>
                <h4>Web事業</h4>
                <ul>
                    <li><a href="<?php bloginfo('url'); ?>/web-company-company-2/">Webページ制作</a></li>
                    <li><a href="<?php bloginfo('url'); ?>/web-company-company-2/">広告代理</a></li>
                </ul>
                <?php get_sidebar(); ?>
            </div><!-- /.bnrR -->
         </div><!-- /.conR -->
    </div><!-- /#contents -->
    <?php get_footer(); ?>
