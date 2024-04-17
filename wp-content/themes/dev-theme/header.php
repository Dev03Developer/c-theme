<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/tailwind_output.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header id="header">
        <!-- Your header content goes here -->
        <div class="logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <?php
                    if ( function_exists( 'the_custom_logo' ) ) {
                        the_custom_logo();
                    }
                ?>
            </a>
        </div>
        <nav class="main-menu">
            <?php 
                // Display the main menu
                wp_nav_menu( array( 'theme_location' => 'primary' ) ); 
            ?>
        </nav>
        <!-- End of header content -->
    </header>
