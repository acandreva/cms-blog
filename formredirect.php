<?php
/*Template Name: Form Redirect*/

get_header(); ?>
    <div class="container maincontent">
        <div class="row">
            <div class="twelve columns">
                <h3>Thank you for your submission.</h3>
                <p><a href="<?php $url = home_url('/'); echo $url;?>">Head back home.</a></p>
            </div>
        </div>
    </div>
<?php get_footer(); ?>