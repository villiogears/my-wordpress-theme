<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="site">
    <header class="site-header">
        <div class="branding">
            <div class="logo" aria-hidden="true">WP</div>
            <div>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="text-decoration:none"><h1 class="site-title"><?php bloginfo( 'name' ); ?></h1></a>
                <p class="site-description"><?php bloginfo( 'description' ); ?></p>
            </div>
        </div>
        <nav class="main-navigation" role="navigation" aria-label="Primary Menu">
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => '', 'container' => false ) ); ?>
        </nav>
        <a class="header-cta" href="<?php echo esc_url( home_url( '/' ) ); ?>">Explore</a>
    </header>
    <div id="content" class="site-content">
