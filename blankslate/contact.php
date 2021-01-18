<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>
<main class="content-fronptage-wrapper" id="content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="header">
<h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
</header>
    <div class="frontpage-wrapper">
        <section class="frontpage-hero-image">
            <div class="frontpage-hero-text">
                <p>Kontakt</p>
            </div>
        </section>
        
    </div>
<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
<?php the_content(); ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</div>
</article>
<?php if ( comments_open() && ! post_password_required() ) { comments_template( '', true ); } ?>
<?php endwhile; endif; ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>