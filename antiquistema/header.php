<!DOCTYPE html>
    <html <?php language_attributes(); ?>>
        <head>
            <meta charset="utf-8"/>
            <meta name="viewport" content="width=device-width" />
            <script src="https://kit.fontawesome.com/a076d05399.js"></script>
            <?php wp_head(); ?>
        </head>
        <body <?php body_class(); ?>>
            <div id="wrapper" class="hfeed">
            <header id="header">
                <div id="branding">
                    <img src="http://antiquisaalborg.local/wp-content/uploads/2021/01/logo.jpg" class="logo">
                    <!-- <div id="site-title">
                        <?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; } ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a>
                        <?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; } ?>
                    </div> -->
                    <a href="javascript:void(0);" onclick="showMenu()">
                        <i class="fa fa-bars burgerbar"></i>
                    </a>
                </div>
                
                <nav id="menu" class="menu-overlay">
                    <!-- <div id="search"><?php get_search_form(); ?></div> -->
                    <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
                </nav>
            </header>
            <div id="container">