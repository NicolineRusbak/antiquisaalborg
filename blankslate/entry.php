<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="article-teaser">
        <?php get_template_part( 'entry', ( is_front_page() || is_home() || is_front_page() && is_home() || is_archive()  ? 'summary' : 'content' ) ); ?>
        
        <div class="article-teaser-text"> 
            <?php if ( ! is_search() ) { get_template_part( 'entry', 'meta' ); } ?>

            <?php if ( is_singular() ) {
            echo '<h1 class="entry-title">';
            } else {
            echo '<h2 class="entry-title">';
            } ?>

            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>

            <?php if ( is_singular() ) {
            echo '</h1>';
            } else {
            echo '</h2>';
            } ?> <?php edit_post_link(); ?>
        </div>

    </div>

    <?php if ( is_singular() ) { get_template_part( 'entry-footer' ); } ?>
    
</article>