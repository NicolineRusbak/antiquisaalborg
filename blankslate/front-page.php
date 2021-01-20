<?php
/*
Template Name: Frontpage
*/
?>

<?php get_header(); ?>
<main id="content">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <header class="header">

            
        </header>

        <div class="frontpage-wrapper">
        <section class="frontpage-hero-image">
            <div class="frontpage-hero-text">
                <p>Det skæve, det klassiske og det gode design</p>
            </div>
        </section>
        <section class="frontpage-description frontpage-text content-wrapper">
            <p>Hos Antiquis har vi siden 2015 specialiseret os i at udvælge danske møbelklassikere og indretningsobjekter med sjæl. 
            Vi tror på indretning, der afspejler personlighed og at godt håndværk fortjener flere liv.</p>
        </section>
        <section class="category-tabs">
            <button class="tablink" onclick="tabChange('Sælg')" id="defaultOpen">Sælg</button>
            <button class="tablink" onclick="tabChange('Find')">Find</button>
            
            <div id="Sælg" class="tabcontent content-wrapper">
                <div class="sælg-gallery">
                    <img src="" alt=""> <!-- https://www.w3schools.com/howto/howto_js_tab_img_gallery.asp Gallri inspiration måske?-->
                    Sælg galleri
                </div>
                <div class="frontpage-text">
                    <h3>For dig der vil hjælpe godt håndværk videre</h3>
                    <p>Når dine møbler skal videre til et nyt liv hjælper vi gerne.
                    Hos Antiquis har vi specialiseret os i at udvælge og vurdere danske møbel klassikere og indretningsobjekter med sjæl. 
                    For os er en god proces, der tager højde for dine behov, vigtig. 
                    Læs her hvordan du kan hjælpe dine møbler videre.</p>
                </div>
                <div class="btn-wrapper">
                    <button class="btn btn-light">LÆS MERE</button>
                </div>
            </div>

            <div id="Find" class="tabcontent content-wrapper">
                <div class="find-gallery">
                    <img src="" alt="">
                    Find galleri
                </div>
                <div class="frontpage-text">
                    <h3>For dig der elsker indretning</h3>
                    <p>Kvalitet fortjener flere liv og der skal være liv i en nutidig indretning.
                    Hos os er patina et kvalitetstegn, et tegn på at noget er for særligt til at blive smidt ud.
                    Det er en historie om et levet liv. Hos Antiquis sætter vi en stor ære i at udvælge danske møbelklassikere og indretningsobjekter med sjæl.
                    Vi tror på indretning der afspejler personlighed. Find inspiration til din personlige indretning her.</p>
                </div>
                <div class="btn-wrapper">
                    <button class="btn btn-light">LÆS MERE</button>
                </div> 
            </div>
        </section>
        <section class="about-antiquis">
            <div class="about-antiquis-image">
                Om antiquis billede som baggrund
                <p>OM ANTIQUIS</p>
            </div>
            <div class="frontpage-text content-wrapper">
                <p>Når dine møbler skal videre til et nyt liv hjælper vi gerne.
                Hos Antiquis har vi specialiseret os i at udvælge og vurdere danske møbel klassikere og indretningsobjekter med sjæl. 
                For os er en god proces, der tager højde for dine behov, vigtig. 
                Læs her hvordan du kan hjælpe dine møbler videre.</p>
                <div class="btn-wrapper">
                    <button class="btn btn-dark">LÆS MERE</button>
                </div>
            </div>
        </section>
        
    </div>

        <div class="entry-content">

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