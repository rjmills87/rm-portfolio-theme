<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head();?>
    <!-- This is a hook that allows WordPress to add things like stylesheets, scripts, and meta tags to the head of the document. -->
</head>

<body <?php body_class();?>>
    <header id="header">
        <div class="site-header">
            <div id='site-logo'>
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/rm-logo-white.png"
                        alt="<?php bloginfo('name'); ?>">
                </a>
            </div>
            <div class="nav-container">
                <nav class="main-nav">
                    <?php
        wp_nav_menu(
            array(
                'theme_location' => 'primary',
                'menu_id' => 'primary-menu',
            )
        );
        ?>
                </nav>

                <div id="hamburger">
                    <span class="line top"></span>
                    <span class="line middle"></span>
                    <span class="line bottom"></span>
                </div>
            </div>
        </div>
        <div class="mobile-nav">
            <nav>
                <?php
        wp_nav_menu(
            array(
                'theme_location' => 'primary',
                'menu_id' => 'primary-menu',
            )
        );
        ?>
            </nav>
        </div>
    </header>