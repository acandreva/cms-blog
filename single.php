<?php get_header(); ?>
    <div class="container othercontent">
        <div class="row ">
            <div class="twelve columns">
    <!-- BEGIN SINGLE PHP -->
                <?php
                if (have_posts()) : 
                    /* OUR DATA CONTEXT IS DEFINED  */
                while (have_posts()) : the_post(); ?>
                    <h4><?php the_category(', ') ?></h4>
                    <h3><?php the_title(); ?></h3>
                    <div class="metainfo">
                        <?php the_time('F jS, Y') ?>
                    <span class="meta-glyph">|</span>
                    </div> 
                    <?php the_content();
                    comments_template( $file, $separate_comments );
                    endwhile;
                endif; ?>
    <!-- END SINGLE PHP -->
            </div>
        </div>
    </div>
<?php get_footer(); ?>