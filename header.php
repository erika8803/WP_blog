<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
        <!-- ファビコン指定 -->
        <link rel="SHORTCUT ICON" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
        <?php wp_head(); ?>
    </head>
    <body>
        <header>
            <div class="header-title-area">
                <h1 class="logo">
                    <a href="<?php echo home_url(); ?>">
                        <?php bloginfo('name'); ?>
                    </a>
                </h1>
            </div>
        </header>
        <section class="navbar">
            <div class="header-navigation">
                <?php wp_nav_menu(['menu' => 'main_nav']); ?>
            </div>
        </section>