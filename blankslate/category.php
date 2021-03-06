<?php get_header(); ?>

<main id="content">

    <header class="header">
        <h1 class="entry-title"><?php single_cat_title(); ?></h1>
        <div class="archive-meta"><?php if ( '' != the_archive_description() ) { echo esc_html( the_archive_description() ); } ?></div>
    </header>
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'entry' ); ?>
    <?php endwhile; endif; ?>

</main>
<p> Template: categories </p>
<?php get_sidebar(); ?>
<?php get_footer(); ?>