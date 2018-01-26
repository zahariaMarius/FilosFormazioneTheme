<?php /* Template Name: Homepage */ ?>

<?php get_header(); ?>

    <!-- section that contain the slideshow - start -->
    <section class="slideshow_section"></section>
    <!-- section that contain the slideshow - end -->
    
    <!-- section that contain teh main courses card - start -->
    
    <section class="courses_section">
        <div class="row">
            <div class="col-lg-2 col-lg-offset-5 custom">
                <div class="section_title">
                    <span>Corsi</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">

            <?php
                // check if the repeater field has rows of data
                if( have_rows('homepage_corsi_offerti') ):

                    // loop through the rows of data
                    while ( have_rows('homepage_corsi_offerti') ) : the_row(); ?>

                    <div class="col-lg-6">
                        <div class="main-cours-card">
                            <figure class="main-cours-card-image">
                                <img src="<?php the_sub_field('immagine_corso') ?>" alt="Filos Formazione Logo">
                            </figure>
                            <div class="main-cours-card-content" style=" background: <?php the_sub_field('colore_corso'); ?> ">
                                <figure class="main-cours-card-icon">
                                    <img src="<?php the_sub_field('icona_corso') ?>" alt="Filos Formazione Logo">                                        
                                </figure>
                                <span> <?php the_sub_field('nome_corso'); ?> </span>
                            </div>
                        </div>
                    </div>


                    <?php endwhile;

                else :

                endif;

                ?>
            </div>
        </div>
    </section>

    <!-- section that contain the main courses - end -->
    

<?php //get_footer(); ?>