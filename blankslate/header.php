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
                </div>
                <div>
                    <span class="burgermenu" style="font-size:30px;cursor:pointer" onclick="openNav()"><i class="fas fa-bars"></i></span>
                </div>

                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <!-- <div id="search"><?php get_search_form(); ?></div> -->
                    <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
                </div>
                
                
            </header>
            <div id="container">