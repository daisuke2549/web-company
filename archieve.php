<?php get_header(); ?>
    <div id="contents">
        <div id="conL">
        <?php if (in_category(array('8'))) {?>
          <div class="information">
                <h2>Blog</h2>
                <dl>
                <?php if(have_posts()): while(have_posts()): the_post();?>
                <dt><?php the_time('Y年m月d日'); ?></dt>
                    <dd>
                    <div class="b_img">
                    <?php the_post_thumbnail('thumbside'); ?>
                    </div>
                     <div class="b_right">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>を更新しました。</a>
                     </div></dd>
                <?php endwhile; endif; ?>
                </dl>
            </div><!-- /.information -->
            <?php } elseif(in_category(array('2'))){ ?>
            <div class="information">
                <h2>INFORMATION</h2>
                <dl>
                <?php if(have_posts()): while(have_posts()): the_post();?>
               <dt><?php the_time('Y年m月d日'); ?></dt>
                    <dd>
                    <span class="tab tag_<?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->slug; } ?>"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></span>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>を更新しました。</dd>
                    <?php endwhile; endif; ?>
                    </dd>
                </dl>
            </div><!-- /.information -->
        </div><!-- /#conL -->
    </div><!-- /#contents -->
    <?php wp_pagenavi(); ?>
    <?php get_footer(); ?>