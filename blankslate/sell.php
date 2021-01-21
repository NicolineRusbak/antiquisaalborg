<?php
/*
Template Name: Sælg
*/
?>

<?php get_header(); ?>
<main class="content-frontpage-wrapper" id="content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="header">
</header>
    
<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
<?php the_content(); ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</div>
</article>
<?php if ( comments_open() && ! post_password_required() ) { comments_template( '', true ); } ?>
<?php endwhile; endif; ?>
</main>

<div class="sell-container">
    <section class="sell-hero">
        <h2>Vi hjælper</br> godt håndværk</br> videre</h2>
        <div class="sell-hero-flex">
            <p class="none">HAR DU BRUG FOR MERE PLADS?</br>VI SÆTTER PRIS PÅ DINE MØBLER!</p>
            <div>
                <button class="btn btn-light none"><a href="#howto-scroll">SÅDAN GØR DU</a></button>
                <button class="btn btn-light none" onclick="formular1()">FÅ DIN PRIS</button>
            </div>
        </div>
    </section>
    <section class="sell-quote">
        <p>"MIT LIV BLEV BEDRE DA JEG SOLGTE ET MØBEL TIL ANTIQUIS, SOM HÅNDTEREDE ALTING MEGET PROFESSIONELT."</br>- Louise 45 år</p>
    </section>
    <section class="howto-container" id="howto-scroll">
        <h2>Sådan gør du:</h2>
        <div class="sell-flex">
            <div class="howto-text howto-1">
                <div>
                    <h1 class="howto-number">1</h1>
                </div>
                <div class="sell-margin-left">
                    <h3>UDFYLD FORMULAREN</h3>
                    <p>Find vores formular nedenfor og udfyld den så godt du kan. Alternativt er du også velkommen til at kontakte os direkte!</p>
                </div>
            </div>
            <div class="howto-text howto-2">
                <div>
                    <h1 class="howto-number">2</h1>
                </div>
                <div class="sell-margin-left">
                    <h3>VURDERING</h3>
                    <p>Når du har udfyldt vores formular laver vi en vurdering af dit møbel. Vurderingen afhænger af type og stand og er først endeligt gældende, når vi dit  møbel i hænderne.</p>
                </div>
            </div>
            <div class="howto-text howto-3">
                <div>
                    <h1 class="howto-number">3</h1>
                </div>
                <div class="sell-margin-left">
                    <h3>AFHENTNING</h3>
                </div>
            </div>
        </div>
    </section>
    <?php $galleri = get_field('galleri'); ?>
    <section class="sell-gallery-mobile">
        <figure class="gallery-item gallery-item-1">
            <img class="gallery-img" src="<?php echo $galleri['img_1']; ?>" alt="">
            MOBILE PLACEHOLDER
        </figure>
        <figure class="gallery-item gallery-item-2">
            <img class="gallery-img" src="<?php echo $galleri['img_2']; ?>" alt="">
            MOBILE PLACEHOLDER
        </figure>
        <figure class="gallery-item gallery-item-3">
            <img class="gallery-img" src="<?php echo $galleri['img_3']; ?>" alt="">
            MOBILE PLACEHOLDER
        </figure>
    </section>
    <div class="sell-mobile-process">
        <h2>Processen i centrum</h2>
        <p>Skal du flytte eller blot have plads til nye møbler i din indretning hjælper vi gerne dine møbler videre. Vi har specialiseret os i at vurdere og prissætte møbler og indretningsobjekter med sjæl. For os er en god proces vigtig, vi sørger for at skræddersy processen, så den passer til din situation. Udfyld formularen så godt du kan, så kontakter vi dig med en pris! </p>
        <button class="btn btn-light" onclick="formular1()">FÅ DIN PRIS</button>
    </div>
    <?php $galleri = get_field('galleri'); ?>
    <section class="sell-gallery-desktop">
        <figure class="gallery-item gallery-item-1">
            <img class="gallery-img" src="<?php echo $galleri['img_1']; ?>" alt="">
            DESKTOP PLACEHOLDER
        </figure>
        <figure class="gallery-item gallery-item-2">
            <img class="gallery-img" src="<?php echo $galleri['img_2']; ?>" alt="">
            DESKTOP PLACEHOLDER
        </figure>
        <figure class="gallery-item gallery-item-3">
            <img class="gallery-img" src="<?php echo $galleri['img_3']; ?>" alt="">
            DESKTOP PLACEHOLDER
        </figure>
        <figure class="gallery-item gallery-item-4">
            <img class="gallery-img" src="<?php echo $galleri['img_4']; ?>" alt="">
            DESKTOP PLACEHOLDER
        </figure>
        <figure class="gallery-item gallery-item-5">
            <img class="gallery-img" src="<?php echo $galleri['img_5']; ?>" alt="">
            DESKTOP PLACEHOLDER
        </figure>
        <div class="gallery-item gallery-item-6">
            <h2>Processen i centrum</h2>
            <p>Skal du flytte eller blot have plads til nye møbler i din indretning hjælper vi gerne dine møbler videre. Vi har specialiseret os i at vurdere og prissætte møbler og indretningsobjekter med sjæl. For os er en god proces vigtig, vi sørger for at skræddersy processen, så den passer til din situation. Udfyld formularen så godt du kan, så kontakter vi dig med en pris! </p>
            <button class="btn btn-light" onclick="formular1()">FÅ DIN PRIS</button>
        </div>
        <figure class="gallery-item gallery-item-7">
            <img class="gallery-img" src="<?php echo $galleri['img_7']; ?>" alt="">
            DESKTOP PLACEHOLDER
        </figure>
        <figure class="gallery-item gallery-item-8">
            <img class="gallery-img" src="<?php echo $galleri['img_8']; ?>" alt="">
            DESKTOP PLACEHOLDER
        </figure>
        <figure class="gallery-item gallery-item-9">
            <img class="gallery-img" src="<?php echo $galleri['img_9']; ?>" alt="">
            DESKTOP PLACEHOLDER
        </figure>
        <figure class="gallery-item gallery-item-10">
            <img class="gallery-img" src="<?php echo $galleri['img_10']; ?>" alt="">
            DESKTOP PLACEHOLDER
        </figure>
        <figure class="gallery-item gallery-item-11">
            <img class="gallery-img" src="<?php echo $galleri['img_10']; ?>" alt="">
            DESKTOP PLACEHOLDER
        </figure>
    </section>
    <section class="sell-box">
        <div class="sell-box-image">
            <img src="<?php echo $galleri['img_12']; ?>" alt="">
        </div>
        <div class="sell-black-box">
            <h2>Dit næste møbel venter</h2>
            <p>Hos Antiquis elsker vi personlig indretning. Vi har et bredt udvalg af kvalitetsmøbler og indretningsobjekter, så du kan sætte dit helt eget præg  på dit hjem. Se vores udvalg her</p>
            <div>
                <button class="btn btn-dark">VORES UDVALG</button>
            </div>
        </div>
    </section>
</div>

<div class="black-out" id="form-1">
    <div class="sell-form form-page-1">
        <div class="numbers"><h1 class="active-number">1</h1><h1>2</h1><h1>3</h1></div>
        <div class="beside">
        <article>
            <h2>Beskriv møblet</h2>
            <p>For at sikre den bedst mulige proces har vi brug for nogle informationer om møblet fra dig. Når du udfylder formularen er det derfor vigtigt at du forsøger at udfylde den så godt du kan. 

            Hvis du ikke lige kender designeren, producenten eller er helt klar over hvilket materiale møblet er udført i, så frygt ikke - vi er eksperter i at finde og genkende designklassikere og indretningsobjekter med sjæl! 
            Sælger du flere møbler er du velkommen til at skrive flere ord i et felt, eller sætte flueben i "jeg sælger flere møbler". </p>
        </article>
        <div class="formular">
            <form>
                <label>Designer/Producent</label>
                <input type="text" name="Designer/Producent">

                <label>Materialer</label>
                <input type="text" name="Materialer">

                <label>Prisidé</label>
                <input type="text" name="Prisidé">

                <label>Stand</label>
                <input type="text" name="Stand">

                <label>Møbeltype</label>
                <input type="text" name="Møbeltype">

                <div class="align">
                    <label class="checkbox-label">Jeg sælger flere møbler</label>
                    <input class="checkbox-input" type="checkbox" name="Flere" value="more">
                </div>

            </form>
            <button onclick="formular2()" class="btn btn-light">NÆSTE</button>
        </div>
        </div>
    </div> 

    <div class="sell-form form-page-2" id="form-2">
        <div class="numbers"><h1>1</h1><h1 class="active-number">2</h1><h1>3</h1></div>
        <div class="beside">
        <article>
            <h2>Beskriv møblet</h2>
            <p>For at sikre den bedst mulige proces har vi brug for nogle informationer om møblet fra dig. Når du udfylder formularen er det derfor vigtigt at du forsøger at udfylde den så godt du kan. 

            Hvis du ikke lige kender designeren, producenten eller er helt klar over hvilket materiale møblet er udført i, så frygt ikke - vi er eksperter i at finde og genkende designklassikere og indretningsobjekter med sjæl! 
            Sælger du flere møbler er du velkommen til at skrive flere ord i et felt, eller sætte flueben i "jeg sælger flere møbler". </p>
        </article>
        <div class="formular">
            <form action="/action_page.php">
                <label for="img">Vælg billede:</label>
                <input type="file" id="img" name="img" accept="image/*">
            </form>
            <button onclick="formular3()" class="btn btn-light">NÆSTE</button>
        </div>
        </div>
    </div>


    <div class="sell-form form-page-3" id="form-3">
        <div class="numbers"><h1>1</h1><h1>2</h1><h1 class="active-number">3</h1></div>
        <article>
            <h2>Om dig</h2>
            <p>Når du har udfyldt formularen og klikket afsend kontakter vi dig typisk indenfor 3-4 hverdage. </p>
        </article>
        <div class="formular">
            <form action="mailto:martin.s96@outlook.dk" enctype="text/plain" name="info" target="_blank">
                <label>Navn</label>
                <input type="text" name="Navn">

                <label>Telefon nummer</label>
                <input type="text" name="telefon">

                <label>email</label>
                <input type="text" name="email">

                <label>Postnummer</label>
                <input type="text" name="postnummer">
                <div class="btn-align-center">
                    <button onclick="formular4()" class="btn btn-light">AFSEND</button>
                </div>
            </form>
        </div>
    </div> 

    <div class="sell-form form-page-4" id="form-4">
        <article>
        <div class="numbers"><h1>1</h1><h1>2</h1><h1>3</h1></div>
            <h2>Tak</h2>
            <p>Formularen er nu afsendt. Der går typisk 3-4 hverdagen fra du har klikket afsend, til vi kontakter dig. 
                I mellemtiden er du velkommen til at tjekke vores instagram eller facebook - måske har vi dit næste møbel stående! </p>
            <div>
                <h2>Sociale medier</h2>

                <a href="https://www.facebook.com/antiquisaalborg">
                    <i class="fab fa-facebook-square"></i>
                    <p>@antiquisaalborg</p>
                </a>
                
                <a href="https://www.instagram.com/antiquis_aalborg/">
                    <i class="fab fa-instagram"></i>
                    <p>@antiquis_aalborg</p>
                </a>

            </div>
        </article>
        <a href="<?php echo site_url('/saelg'); ?>"><button class="btn btn-light">LUK</button></a>
    </div>

    
</div>



<?php get_sidebar(); ?>
<?php get_footer(); ?>