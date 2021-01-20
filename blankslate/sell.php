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

<div class="black-out">
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
            <div class="image-box"></div>
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
            <form>
                <label>Navn</label>
                <input type="text" name="Navn">

                <label>Telefon nummer</label>
                <input type="text" name="telefon">

                <label>email</label>
                <input type="text" name="email">

                <label>Postnummer</label>
                <input type="text" name="postnummer">

            </form>
            <button onclick="formular4()" class="btn btn-light">AFSEND</button>
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