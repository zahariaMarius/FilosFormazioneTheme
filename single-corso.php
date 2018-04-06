

<?php get_header(); ?>

    <div class="jumbotron jumbotron-fluid p-0" style="background: url(<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "filos_corsi_background" )[0]; ?>); background-size: cover; background-position: center center;">
        <div class="tipo-corso">
            <p><?php the_title(); ?></p>    
        </div>
    </div>    

    <!-- apertura del container  -->
    <div class="container-fluid">

    <section class="post-corso">
        <div class="row">
                <div class="col-sm-7 informazioni-generali">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="body py-5">
                                <p class="title pb-3">Obiettivi e descrizione del corso</p>
                                <p class="text">
                                    <?php the_field('obiettivi_e_descrizione_del_corso'); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="body py-5">
                                <p class="title pb-3">Contenuti del corso</p>
                                <p class="text">
                                    <?php the_field('contenuti_del_corso'); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="body py-5">
                                <p class="title pb-3">Documenti necessari</p>
                                    <ul class="text">
                                        <?php foreach( get_field('documenti_necessari') as $docsNec ): ?>
		                                    <li><?php echo $docsNec; ?></li>
	                                    <?php endforeach; ?>
                                    </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="body py-5">
                                <p class="title pb-3">Rivolto a</p>
                                <p class="text"><?php the_field('rivolto_a'); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="body py-5">
                                <p class="title pb-3">Scolarita richiesta</p>
                                <p class="text"><?php the_field('scolarita_richiesta');?></p>
                            </div>
                        </div>
                    </div>
                </div>


            <div class="col-sm-5">
                <aside class="informazioni-utili py-5">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <p class="aside-title">INFORMAZIONI UTILI</p>
                        </div>
                    </div>
                    <div class="row pt-5">
                        <div class="col-sm-2 icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/imgs/corsi/dettaglioCorso/clessidra.png" alt="">
                        </div>
                        <div class="col-sm-9 align-self-center text">
                            <p> <span>Durata: </span><?php the_field('durata');?></p>
                        </div>
                    </div>
                    <div class="row pt-5">
                        <div class="col-sm-2 icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/imgs/corsi/dettaglioCorso/portafogli.png" alt="">
                        </div>
                        <div class="col-sm-9 align-self-center text">
                            <p> <span>Costi: </span><?php the_field('costi'); ?></p>
                        </div>
                    </div>
                    <div class="row pt-5">
                        <div class="col-sm-2 icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/imgs/corsi/dettaglioCorso/cappello.png" alt="">
                        </div>
                        <div class="col-sm-9 align-self-center text">
                            <p> <span>Titoli rilasciati: </span><?php the_field('titolo_rilasciato');?></p>
                        </div>
                    </div>
                    <div class="row pt-5">
                        <div class="col-sm-2 icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/imgs/corsi/dettaglioCorso/cronometro.png" alt="">
                        </div>
                        <div class="col-sm-9 align-self-center text">
                            <p> <span>Scadenza iscrizioni: </span>
                            <?php 
                            $mesi = array ('01'=>'Gennaio','02'=>'Febbraio','03'=>'Marzo','04'=>'Aprile','05'=>'Maggio','06'=>'Giugno','07'=>'Luglio','08'=>'Agosto','09'=>'Settembre','10'=>'Ottobre','11'=>'Novembre','12'=>'Dicembre'); 
                            $date = get_field('scadenza_iscrizioni',false,false);
                            $dateobj = new DateTime($date);
                            $mese = substr($date,4,2); 
                            echo $dateobj->format('j').' '.$mesi[$mese].' '.$dateobj->format('Y'); ?>
                            </p>
                        </div>
                    </div>
                    <div class="row pt-5">
                        <div class="col-sm-2 icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/imgs/corsi/dettaglioCorso/calendario.png" alt="">
                        </div>
                        <div class="col-sm-9 align-self-center text">
                            <p> <span>Periodo: </span>
                                
                                <?php 
                                $date1 = get_field('periodo_corso_inizio',false,false);
                                $mese1 = substr($date1,4,2);
                                $date1 = new DateTime($date1);
                                $date2 = get_field('periodo_corso_fine',false,false);
                                $mese2 = substr($date2,4,2);
                                $date2 = new DateTime($date2);
                                $date3 = get_field('periodo_corso_inizio',false,false);
                                if(get_field('frequenza_obbligatoria')) : ?> 
                                    da <?php echo $mesi[$mese1].' '; echo $date1->format('Y'); ?> a <?php echo $mesi[$mese2].' '; echo $date2->format('Y'); ?> con frequenza obbligatoria
                                    <?php
                                else : ?>
                                    da <?php echo $mesi[$mese1].' '; echo $date1->format('Y'); ?> a <?php echo $mesi[$mese2].' '; echo $date2->format('Y'); ?> con frequenza non obbligatoria
                                <?php endif; ?>
                            
                            </p>
                        </div>
                    </div>
                    <div class="row pt-5">
                        <div class="col-sm-2 icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/imgs/corsi/dettaglioCorso/clock.png" alt="">
                        </div>
                        <div class="col-sm-9 align-self-center text">
                            <p> <span>Orario: </span><?php the_field('orario'); ?></p>
                        </div>
                    </div>
                    <div class="row pt-5">
                        <div class="col-sm-2 icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/imgs/corsi/dettaglioCorso/placeholder.png" alt="">
                        </div>
                        <div class="col-sm-9 align-self-center text">
                            <p> <span>Sede: </span><?php the_field('sede_operativa'); ?></p>
                        </div>
                    </div>
                    <div class="row pt-5">
                        <div class="col-sm-12 text-center">
                            <a class="btn" href="/preiscriviti/?your-corso=<?php the_title(); ?>">Preiscriviti</a>
                        </div>
                    </div>
                </aside>
            </div>
        </div>

<div class="corsi-simili">
    <div class="row mt-5">
        <div class="col-sm-12">
            <p>Corsi simili</p>
            <?php
               $fallback_image = "https://picsum.photos/320/240";
               $categoria = get_field('categoria_del_corso'); // mi esce un echo
               
               $related_posts = new WP_Query(array(
	                    'posts_per_page'	=> 3,
                        'post_type'			=> 'corso',
                        'meta_value'        => $categoria
                        ));
            ?>
            <hr>
        </div>
    </div>
    <div class="row justify-content-left">
                <?php if ($related_posts->have_posts()) : ?>
	            <?php while ($related_posts->have_posts()) : $related_posts->the_post(); ?>
                    <div class="col-sm-4">
                        <div class="card">
                        <!-- per ogni news inserire l'immagine qua sotto, con alt rispettivo -->
                            <?php the_post_thumbnail('filos_home', array('class' => 'card-img-top')); ?>
                            <a href="<?php the_permalink(); ?>"><div class="overlay-card-img-top"></div></a>
                            <div class="card-body">
                                <!-- qua inserire il titolo della news -->
                                <h5 class="card-title"><?php the_title(); ?></h5>
                                <!-- qua inserire la descrizione della news, e non l'intero corpo siccome è una breve presentazione di essa -->
                                <p class="card-text mb-4"><?php 
                                                            $str = get_field('obiettivi_e_descrizione_del_corso');
                                                            echo substr($str, 0, 120);
                                                            echo '...'; ?></p>
                                <div class="scopri-di-piu"><a href="<?php the_permalink(); ?>"><p>Scopri di più</p></a></div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?>    
                </div>
                <?php wp_reset_query(); ?>
</div>

    </section>


    <!-- chiusura del container -->
    </div>

<?php get_footer(); ?>  

