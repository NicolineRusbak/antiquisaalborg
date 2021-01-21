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
        <div class="video">
            <?php $video = get_field('video'); ?>
            <?php $attr = array(
                    'video' => $video,
                    'preload' => 'auto',
                    'autoplay' => 'on',
                    'loop' => 'on'
            ); ?>
        </div>

        <?php echo wp_video_shortcode(  $attr ); ?>




        <div class="frontpage-wrapper">
            <?php $intro = get_field('intro'); ?>

            <section class="frontpage-hero-image">
                <div class="frontpage-hero-text content-wrapper">
                    <p><?php echo $intro['stor_tekst'];?></p>
                </div>
            </section>
            <section class="frontpage-description frontpage-text content-wrapper">
                <div class="description-width">
                    <h3><?php echo $intro['underoverskrift_1'];?></h3>
                    <h3><?php echo $intro['underoverskrift_2'];?></h3>
                </div>

            </section>

            <?php $galleri = get_field('galleri'); ?>

            <div class="frontpage-gallery content-wrapper">
                <img class="grid-img-1" src="<?php echo $galleri['img_1']; ?>" alt="">
                <img class="grid-img-2" src="<?php echo $galleri['img_1']; ?>" alt="">
                <img class="grid-img-3" src="<?php echo $galleri['img_1']; ?>" alt="">
            </div>

            


            <section class="category-tabs">
                <button class="tablink" onclick="tabChange('Sælg')" id="defaultOpen">Sælg</button>
                <button class="tablink" onclick="tabChange('Find')">Find</button>


                
                <div id="Sælg" class="tabcontent">

                    <!-- Slider main container -->
                    <div class="swiper-container">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">

                            <!-- Slides -->
                            <img src="" class="swiper-slide"></img>
                            <img src="" class="swiper-slide"></img>
                            <img src="" class="swiper-slide"></img>
                            <img src="" class="swiper-slide"></img>

                        </div>
                        <!-- If we need pagination -->
                        <!-- <div class="swiper-pagination"></div> -->

                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>

                        <!-- If we need scrollbar -->
                        <!-- <div class="swiper-scrollbar"></div> -->
                    </div>


                    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
                    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
                    <script>
                        var mySwiper = new Swiper('.swiper-container', {
                            // If we need pagination
                            pagination: {
                                el: '.swiper-pagination',
                            },

                            // Navigation arrows
                            navigation: {
                                nextEl: '.swiper-button-next',
                                prevEl: '.swiper-button-prev',
                            }

                        })

                    </script>

                    <div class="frontpage-text content-wrapper">
                    <?php $hjem_saelg = get_field('hjem_saelg'); ?>

                        <h3><?php echo $hjem_saelg['titel']; ?></h3>
                        <p><?php echo $hjem_saelg['tekst']; ?></p>
                        <div class="btn-wrapper">
                        <button class="btn btn-light">LÆS MERE</button>
                    </div>
                    </div>

                </div>

                <div id="Find" class="tabcontent">

                    <!-- Slider main container -->
                    <div class="swiper-container">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">

                            <!-- Slides -->
                            <img src="" class="swiper-slide"></img>
                            <img src="" class="swiper-slide"></img>
                            <img src="" class="swiper-slide"></img>
                            <img src="" class="swiper-slide"></img>

                        </div>
                        <!-- If we need pagination -->
                        <!-- <div class="swiper-pagination"></div> -->

                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>

                        <!-- If we need scrollbar -->
                        <!-- <div class="swiper-scrollbar"></div> -->
                    </div>


                    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
                    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
                    <script>
                        var mySwiper = new Swiper('.swiper-container', {
                            // If we need pagination
                            pagination: {
                                el: '.swiper-pagination',
                            },

                            // Navigation arrows
                            navigation: {
                                nextEl: '.swiper-button-next',
                                prevEl: '.swiper-button-prev',
                            }

                        })

                    </script>





                    <div class="frontpage-text content-wrapper">
                    <?php $hjem_find = get_field('hjem_find'); ?>
                        <h3><?php echo $hjem_find['titel']; ?></h3>
                        <p><?php echo $hjem_find['tekst']; ?></p>
                        <div class="btn-wrapper">
                        <button class="btn btn-light">LÆS MERE</button>
                    </div> 
                    </div>

                </div>
            </section>


            <section class="about-antiquis">
                <?php $om = get_field('om'); ?>

                <div class="about-antiquis-image">
                    <img src="<?php echo $om['om_billede']; ?>"></img>
                </div>

                <div class="frontpage-text content-wrapper">
                    <h1>Antiquis</h1>
                    <p><?php echo $om['om_tekst']; ?></p>
                    <div class="btn-wrapper">
                        <a href="<?php echo site_url('/om-antiquis'); ?>"><button class="btn btn-dark">LÆS MERE</button></a>
                    </div>
                </div>

            </section>
        
        </div>
    
    </article>



    <?php if ( comments_open() && ! post_password_required() ) { comments_template( '', true ); } ?>
    
    <?php endwhile; endif; ?>


</main>
<?php get_footer(); ?>