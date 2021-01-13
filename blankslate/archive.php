<?php get_header(); ?>

<main id="content">

    <header class="header">
        <h1><?php single_cat_title(); ?></h1>
        <div class="archive-meta"><?php if ( '' != the_archive_description() ) { echo esc_html( the_archive_description() ); } ?></div>
    </header>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h3><?php the_title(); ?></h3>
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>">Læs mere... </a>

    <?php endwhile; endif; ?>

    <p> Template: archieve.php </p>

</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>