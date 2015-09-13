<?php get_header(); ?>
    <div class="container maincontent">
        <section class="row">
            <div class="twelve columns">
<!-- BEGIN LOOP -->
                <?php 
                if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post(); ?>
                <div class="home-posts">
                    <h4><?php the_category(', ') ?></h4>
                    <h3>
                        <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                        </a>
                    </h3>
                    <div class="hide-content">
                        <div class="metainfo">
                            <?php the_time('F jS, Y') ?>
                            <span class="meta-glyph">|</span>
                            <a href="<?php comments_link(); ?>">
                            <?php $image_url='http://www.allisoncandreva.com/wp/wp-content/themes/blog-template-allisonlogan/images/comment.png'; ?>
                            <img src="<?php echo $image_url;?>" class="commentimage">
                            Comments</a>
                            <span class="meta-glyph social-shortcode">|</span>
                        </div> 
                        <div class="social-shortcode">
                            <?php echo do_shortcode('[ssba]'); ?>
                        </div>
                    </div>
                    <span class="hide-content">
                    <?php the_content(); ?>
                    </span>
                </div>
                <div class="clear"></div>
                <?php } // end while
                } // end if
                ?>
<!-- END LOOP -->
                <div class="next_prev"><p><?php posts_nav_link(' | ', '&lsaquo; previous', 'next &rsaquo;'); ?></p></div>
            </div>
        </section>
    </div><!--END MAINCONTENT CONTAINER-->
<?php get_footer(); ?>

