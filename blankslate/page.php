<?php get_header(); ?>
<main id="content">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="header">
            <div class="hero-image">
                <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
                
                <h1 class="entry-title"><?php the_title(); ?></h1> 

            </div>

        </header>

        <div class="entry-content">
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
                <?php the_content(); ?>

            </div>

        </div>

    </article>
    <?php endwhile; endif; ?>


    <p> Template: page.php </p>
    
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>