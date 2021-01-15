<!-- This template is for displaying 404 pages  -->

<?php get_header(); ?>
<main id="content">
    <article id="post-0" class="post not-found banner-flex">
        <header class="header img-404-banner">
        <!-- <img src="http://antiquisaalborg.local/wp-content/uploads/2021/01/Group-17.jpg" alt="" > -->
            <h1 class="entry-title"><?php esc_html_e( '404', 'antiquistema' ); ?></h1>
        </header>
        <div class="entry-content">
            <h2><?php esc_html_e( 'UPS!', 'antiquistema' ); ?></h2>
            <p><?php esc_html_e( 'Du er faret vild. Heldigvis hjælper vi også andet end møbler videre.', 'antiquistema' ); ?></p>
        </div>
    </article>
</main>
<!-- <?php get_sidebar(); ?> -->
<?php get_footer(); ?>