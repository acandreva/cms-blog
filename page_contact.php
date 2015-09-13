<?php
/*Template Name: Contact*/

get_header(); ?>
    <div class="container othercontent">
        <div class="row">
            <div class="twelve columns">
                <?php if (have_posts()) : 
                    /* OUR DATA CONTEXT IS DEFINED  */
                    while (have_posts()) : the_post(); ?> 
                        <h3><?php the_title(); ?></h3>
                        <?php the_content();
                    endwhile;
                endif; ?>
                <div id="contactform">
                    <form id="myform" action="contactform.php" method="post">
                        <label for="fname" class="hidden_mobile2">First Name:</label>
                        <input type="text" class="hidden_mobile2" name="fname"/>
                        <label for="lname" class="hidden_mobile2">Last Name:</label>
                        <input type="text" class="hidden_mobile2" name="lname"/>
                        <label for="email">Email:</label>
                        <input type="email" name="email"/>
                        <label for="message">Comments:</label>
                        <textarea name="message"></textarea>
                        <input type="submit" name="submit" value="Submit"/>
                        <input type="reset" name="reset" value="Reset"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>