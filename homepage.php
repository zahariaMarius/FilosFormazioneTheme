<?php /* Template Name: Homepage */ ?>

<?php get_header(); ?>



<!-- <div class="carousel-caption">
                    <h5>bella</h5>
                    <a class="btn btn-primary" href="#">Scopri di più</a>
                </div> -->



    <!-- section that contain the slideshow - start -->
    <!-- <section class="slideshow_section">

    <div id="newsCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
        <li data-target="#newsCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#newsCarousel" data-slide-to="1"></li>
        <li data-target="#newsCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="<?php echo get_template_directory_uri(); ?>/imgs/logo.png" alt="Filos Formazione Logo">
            </div>

        </div>

        <a class="carousel-control-prev" href="#newsCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#newsCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div> -->

    </section>


    <?php if( have_rows('news_prima_pagina_slideshow') ): ?>
                
                <div id="newsCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">

                <?php $numrows = count( get_field( 'news_prima_pagina_slideshow' ) ); ?>

                <?php for ($i = 0; $i < $numrows; $i++) { 
                    if ($i == 0) {
                        echo '<li data-target="#newsCarousel" data-slide-to="'.$i.'" class="active"></li>';
                    } else {
                        echo '<li data-target="#newsCarousel" data-slide-to="'.$i.'"></li>';
                    }
                }
                ?>
                    </ol>
                    <div class="carousel-inner">
                <?php $increment; while ( have_rows('news_prima_pagina_slideshow') ) : the_row(); $increment++; ?>   


                        <?php $post_object = get_sub_field('news_post');?>

                        <?php if( $post_object ): ?>

                            <?php $post = $post_object; setup_postdata( $post ); ?>
                                <?php if ($increment == 1) { ?>
                                <div class="carousel-item active">
                                    <img src="<?php the_field('immagine_news'); ?>">
                                </div>
                                <?php } else { ?>
                                <div class="carousel-item">
                                    <img src="<?php the_field('immagine_news'); ?>">
                                </div>
                                <?php } ?>
                                    
                            <?php wp_reset_postdata(); ?>

                        <?php endif; ?>

                    

                <?php endwhile; ?>
                    </div>
                    <a class="carousel-control-prev" href="#newsCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#newsCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
                </div>

            <?php endif; ?>

    

<?php get_footer(); ?>