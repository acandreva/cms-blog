<?php
/*Template Name: Search Page*/

get_header(); ?>
    <div class="container maincontent">
        <div class="row">
            <div class="twelve columns">
                <p><?php printf(__('<h2>Search results for:</h2> <h2 class="search-terms">%s</h2>'), get_search_query() ); ?></p>
                <?php
                if (have_posts() ) : 
                    while (have_posts()) : the_post(); ?> 
                <div class="search-posts">
                    <h4><?php the_category(', ') ?></h4>
                    <h3>
                        <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                        </a>
                    </h3>
                    <div>
                        <div class="metainfo">
                            <?php the_time('F jS, Y') ?>
                            <span class="meta-glyph">|</span>
                            <a href="<?php comments_link(); ?>">
                            <?php $image_url='http://www.allisoncandreva.com/wp/wp-content/themes/blog-template-allisonlogan/images/comment.png'; ?>
                            <img src="<?php echo $image_url;?>" class="commentimage">
                            Comments</a>
                            <span class="meta-glyph">|</span>
                        </div> 
                        <?php echo do_shortcode('[ssba]'); ?>
                    </div>
                    <?php the_content(); ?>
                </div>
                <div class="clear"></div>
                    <?php endwhile;
                else : ?>
                <h2>Nothing Found</h2>
                <p>Sorry, nothing matched your search criteria. Please try again with different search terms.</p>
                <?php endif; ?>
                <div class="next_prev"><p><?php posts_nav_link(' | ', '&lsaquo; previous', 'next &rsaquo;'); ?></p></div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>

