<?php 
/* Template: 404 page (Not Found) */

get_header(); ?>
    <div class="container othercontent">
        <div class="row">
            <div class="twelve columns">
                <h2>Not Found</h2>
                <h3>This is somewhat embarrassing, isn't it?</h3>
                <p>It looks like nothing was found at this location. Maybe try a search?</p>
                <div class="error_search">
                    <?php get_search_form(); ?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>

