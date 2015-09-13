<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>A Click Away</title>
<?php wp_head(); ?>
    <!-- Links to our Style.css file -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
    <!--header background js-->
    <script type="text/javascript" src="http://www.allisoncandreva.com/wp/wp-content/themes/blog-template-allisonlogan/js/jquery.backstretch.min.js"></script>

    <script type="text/javascript" src="http://www.allisoncandreva.com/wp/wp-content/themes/blog-template-allisonlogan/js/main.js"></script>
</head>
<body>
    <div id="masthead">
        <div class="container">
            <div class="row">
            <!--Search Form -->
                <div class="six columns searchbx">
                    <?php $search_image_url='http://www.allisoncandreva.com/wp/wp-content/themes/blog-template-allisonlogan/images/search.png'; ?>
                    <img src="<?php echo $search_image_url;?>" id="search_image">
                    <div id="search_tool" class="hide-search"><?php get_search_form(); ?></div>
                </div>
            <!--Navigation-->
                <div class="six columns">
                    <?php wp_nav_menu(array(
                        'sort_column' => 'menu_order',
                        'container_class' => 'blog-menu-header'
                    )); ?>
                </div>
            </div>
            <header class="row">
            <!--Blog Info -->
                <div class="twelve columns">
                    <h1><a href="<?php $url = home_url('/'); echo $url;?>">
                        <?php bloginfo('name') ?>
                        </a>
                    </h1>
                    <p><?php bloginfo('description') ?></p>
                </div>
            </header>
        </div>
    </div>

<!--END OF HEADER AREA - BEGIN SECTION CONTENT-->
