<?php get_header(); ?>
<main id="content">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="header">
            <div class="hero-image">
                <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
                
                <h1 class="entry-title"><?php the_title(); ?></h1> 

            </div>

            <?php edit_post_link(); ?>

        </header>

        <div class="entry-content">

            <?php the_content(); ?>

        </div>
    </article>
    <?php endwhile; endif; ?>

    <section class="content-wrapper">

        <article class="accordion-area">

            <?php if( get_fields('') ): ?>

                <div class="accordion">
                    <button><?php the_field('overskrift'); ?><i class="fas fa-chevron-down icon"></i></button>
                </div>
                <p class="panel"><?php the_field('beskrivelse'); ?></p>


                <div class="accordion">
                    <button><?php the_field('overskrift2'); ?><i class="fas fa-chevron-down icon"></i></button>
                </div>
                <p class="panel"><?php the_field('beskrivelse2'); ?></p>


                <div class="accordion">
                    <button><?php the_field('overskrift3'); ?><i class="fas fa-chevron-down icon"></i></button>
                </div>
                <p class="panel"><?php the_field('beskrivelse3'); ?></p>

            <?php endif; ?>

        </article>

    </section>



    <p> Template: page.php </p>
    
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>