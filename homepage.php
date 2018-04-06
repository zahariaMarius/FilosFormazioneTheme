<!--  
    Ogni blocco html è stato commentato in modo da capire dove inserire funzioni php che
    recuparano i dati dal DB.
    Rendere la pagina dinamica andando a sostituire i dati fittizzi.
    Creare ogni elemento avendo il suo scheletro e seguire i commenti per capire dove
    inserire e quale dato inserire al suo interno.
    Una volta completato un elemento eliminare gli altri inutili, come in esempio
    nella carousel-section.
-->

<?php /* Template Name: Homepage */ ?>
<?php get_header(); ?>

    <!-- section that contain the slideshow - start -->
    <section class="carousel-section">
        <div id="newsCarousel" class="carousel slide" data-ride="carousel" data-interval="10000">
            <ol class="carousel-indicators mb-5">
                <!-- inserire il contenuto della data-slide-to per ogni indice presente, il primo deve essere active - start -->
                <li data-target="#newsCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#newsCarousel" data-slide-to="1"></li>
                <li data-target="#newsCarousel" data-slide-to="2"></li>
                <!-- inserire il contenuto della data-slide-to per ogni indice presente - start -->
            </ol>
            <!-- per ogni news creare un carousel-item -->
            <div class="carousel-inner">
            <?php
            $primo = true;
            query_posts( 'category_name=topnews&posts_per_page=3' ); 
                        while(have_posts()) : the_post(); ?>
                <div class="carousel-item <?php if($primo) echo 'active' ?>">
                    <!-- inserire il contenuto della slideshow in questo blocco solamente l'immagine - start -->
                    <img class="d-block w-100" src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), "filos_corsi_background")[0]; ?>" alt="Immagine news">
                    <!-- inserire il contenuto della slideshow in questo blocco, solamente l'immagine - end -->
                    <div class="carousel-caption d-none d-md-block">
                        <!-- inserire il contenuto della slideshow in questo blocco, ripettivamente: Titolo, Sottotitolo e bottone - start -->
                        <h1 class="carousel-title display-1"><?php the_title(); ?></h1>
                        <h5 class="carousel-subtitle display-4"><?php the_field('sottotitolo'); ?></h5>
                        <a class="carousel-button btn btn-danger text-center" href="<?php the_permalink(); ?>">Scopri di più</a>
                        <!-- inserire il contenuto della slideshow in questo blocco, ripettivamente: Titolo, Sottotitolo e bottone - end -->
                    </div>
                </div>
                <!-- una volta ciclato il primo eliminare questi - start -->
                <?php $primo = false; endwhile; ?>
            </div>
            <!-- una volta ciclato il primo eliminare questi - end -->    

            <a class="carousel-control-prev" href="#newsCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#newsCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!-- section that contain the slideshow - end -->

    <!-- Apertura del contenitore della pagina -->
    <div class="container-fluid"> 

    <section class="courses_section">
            <div class="row justify-content-center">
                <div class="col-sm-2 text-center">
                    <!-- inserire il nome della sezione -->
                    <h1 class="display-3 section-title">Corsi</h1>
                </div>
            </div>
            <!-- se i corsi sono dispari creare classi row ogni 3 oggetti, se invece sono pari ogni 2 -->
            <!-- qua i contenuti sono pari quindi le righe che contengono 2 macro corsi a testa
                sotto inizia la riga con classe .row, importante mantenere le stesse classi -->
            <div class="row justify-content-center">
                <!-- per ogni corso craere una col -->
                <div class="col-sm-4 p-5">
                    <a href="./corsi/?corso_ricercato=meccanica">
                    <div class="card card-corso rounded-0 text-center">
                        <!-- inserire il contenuto dei macro corsi offerti in questo blocco, rispettivamente: immagine di sfondo, icona che rappresenta il corso e nome del corso - start -->
                        <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/imgs/corsi/logoMeccanica.jpeg" alt="logo corso meccanica">
                        <div class="card-img-overlay meccanica">
                            <img class="card-title" src="<?php echo get_template_directory_uri(); ?>/imgs/corsi/iconaMeccanica.png" alt="Sfondo corso meccanica">
                            <p class="card-text">MECCANICA</p>
                        </div>
                        <!-- inserire il contenuto dei macro corsi offerti in questo blocco, rispettivamente: immagine di sfondo, icona che rappresenta il corso e nome del corso - start -->
                    </div>
                    </a>
                </div>
                <div class="col-sm-4 p-5">
                <a href="./corsi/?corso_ricercato=termoidraulica">
                    <div class="card card-corso rounded-0 text-center">
                        <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/imgs/corsi/logoTermoidraulica.jpeg" alt="logo corso termoidraulica">
                        <div class="card-img-overlay termoidraulica">
                            <img class="card-title title-termoidraulica" src="<?php echo get_template_directory_uri(); ?>/imgs/corsi/iconaTermoidraulica.png" alt="Sfondo corso termoidraulica">
                            <p class="card-text">TERMOIDRAULICA</p>
                        </div>
                    </div>
                    </a>
                </div>
            </div> <!-- qua invece finisce la riga e sotto ne inizia un'altra -->
            <div class="row justify-content-center">
                <div class="col-sm-4 p-5">
                <a href="./corsi/?corso_ricercato=sociosanitario">
                    <div class="card card-corso rounded-0 text-center">
                        <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/imgs/corsi/logoSociosanitario.jpeg" alt="logo corso socio sanitario">
                        <div class="card-img-overlay sociosanitario">
                            <img class="card-title" src="<?php echo get_template_directory_uri(); ?>/imgs/corsi/iconaSociosanitario.png" alt="Sfondo corso socio sanitario">
                            <p class="card-text">SOCIO SANITARIO</p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-sm-4 p-5">
                <a href="./corsi/?corso_ricercato=acconciatura">
                    <div class="card card-corso rounded-0 text-center">
                        <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/imgs/corsi/logoAcconciatura.jpeg" alt="logo corso acconciatura">
                        <div class="card-img-overlay acconciatura">
                            <img class="card-title title-acconciatura" src="<?php echo get_template_directory_uri(); ?>/imgs/corsi/iconaAcconciatura.png" alt="Sfondo corso acconciatura">
                            <p class="card-text">ACCONCIATURA</p>
                        </div>
                    </div>
                </a>
                </div>
            </div>
            

    </section>


    <!-- section trova corso -start -->
    <section class="trova-corso-section" style="background: url(<?php echo get_template_directory_uri(); ?>/imgs/sectionTrovacorso.jpeg) no-repeat; background-size: 100% 100%;">
        <div class="form-container">
            <div class="row justify-content-center">
                <div class="col-sm-6 text-center">
                    <!-- inserire il nome della sezione -->
                    <h1 class="display-3">Trova il tuo corso</h1>
                </div>
            </div>
            <div class="row justify-content-center align-middle">
                <div class="col-sm-3">
                    <form method="get" action="./corsi/">
                        <div class="form-group text-center py-4">
                            <!-- inserire per ogni label il contenuto -->
                            <label class="mb-3" for="formSelectTitoloStudio">Parlaci di te:</label>
                            <select class="form-control" id="formSelectTitoloStudio" name="rivolto_a"style="background: url(<?php echo get_template_directory_uri(); ?>/imgs/down-arrow2.png) no-repeat right white; -webkit-appearance: none; background-position-x: 95%;">
                                <option disabled selected>Seleziona</option>
                                <option value="giovaniobbligoformativo">Sono un giovane in obbligo formativo (14-18 anni)</option>
                                <option value="sistemaduale">Partecipo ad un sistema duale</option>
                                <option value="ifts">Sono diplomato e/o laureato</option>
                                <option value="disoccupati">Sono disoccupato</option>
                                <option value="inoccupati" >Sono inoccupato</option>
                                <option value="occupati" >Sto lavorando</option>
                                <option value="cassaintegrati" >Sono cassa integrato</option>
                                <!-- inserire per ogni select le option in maniera dinamica, lasciare quella di default -->
                            </select>
                        </div>
                        <div class="form-group text-center py-4">
                            <!-- inserire per ogni label il contenuto -->
                            <label class="mb-3" for="formSelectTitoloStudio">A quale corso sei interessato?</label>
                            <select class="form-control" id="formSelectTitoloStudio" name="corso_ricercato" style="background: url(<?php echo get_template_directory_uri(); ?>/imgs/down-arrow2.png) no-repeat right white; -webkit-appearance: none; background-position-x: 95%;">
                                <option disabled selected>Seleziona</option>
                                <option value="acconciatura">Acconciatura</option>
                                <option value="meccanica">Meccanica</option>
                                <option value="sociosanitario">Socio sanitario</option>
                                <option value="termoidraulica">Termoidraulica</option>
                                <!-- inserire per ogni select le option in maniera dinamica, lasciare quella di default -->
                            </select>
                        </div>
                        <div class="form-group text-center py-4">
                            <!-- inserire per ogni label il contenuto -->
                            <label class="mb-3" for="formSelectTitoloStudio">Qual è la sede che preferisci?</label>
                            <select class="form-control" id="formSelectTitoloStudio" name="sede" style="background: url(<?php echo get_template_directory_uri(); ?>/imgs/down-arrow2.png) no-repeat right white; -webkit-appearance: none; background-position-x: 95%;">
                                <option disabled selected>Seleziona</option>
                                <option value="torino">Torino</option>
                                <option value="novara">Novara</option>
                                <!-- inserire per ogni select le option in maniera dinamica, lasciare quella di default -->
                            </select>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-4">
                                <button type="submit" class="btn btn-light">Cerca</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- section trova corso -end -->

    <!-- section news - start -->
    <section class="section-news">
        
        <div class="row justify-content-center">
                <div class="col-sm-6 text-center">
                    <!-- inserire il nome della sezione -->
                    <h1 class="display-3 section-title">News</h1>
                </div>
            </div>
            <!-- Ogni tre news creare una row -->
            <div class="row justify-content-center">
                <!-- creare una colonna per ogni news -->
                <?php 
                    query_posts( 'category_name=attuale&posts_per_page=6' ); 
                        while(have_posts()) : the_post(); ?>

                    <div class="col-sm-4" style="margin-bottom: 30px;">
                    <div class="card">
                    <?php 
                        $mese_n = get_the_date('m');
                        $mese = array(
                            '01'=>'Gennaio',
                            '02'=>'Febbraio',
                            '03'=>'Marzo',
                            '04'=>'Aprile',
                            '05'=>'Maggio',
                            '06'=>'Giugno',
                            '07'=>'Luglio',
                            '08'=>'Agosto',
                            '09'=>'Settembre',
                            '10'=>'Ottobre',
                            '11'=>'Novembre',
                            '12'=>'Dicembre'
                        );
                        $data = get_the_date('d').' '.$mese[$mese_n].' '.get_the_date('Y');

                        ?>
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('filos_home',array('class'=>'card-img-top')); ?></a>
                        <div class="overlay-card-img-top">
                            <div class="data-news"><?php echo $data ?></div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title" ><?php the_title(); ?></h5>
                            <p class="card-text"><?php the_excerpt(); ?></p>
                            <div class="scopri-di-piu">
                                <a href="<?php the_permalink(); ?>"><p>Scopri di più</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                
                
            </div>
    </section>
    <!-- section news - end -->


    <!-- section filos in breve - start -->
    <!-- contenuto statico -->
    <section class="section-filos-in-breve">
            <div class="row justify-content-center">
                <h1 class="display-3 section-title">Filos in breve</h1>
            </div>
            <div class="row justify-content-center py-5">
                <div class="col-sm-12 body pt-5">
                    <img src="<?php echo get_template_directory_uri(); ?>/imgs/sectionFilosinbreve.png" alt="Filos in breve">
                    <div class="row justify-content-center">
                        <div class="col-sm-12">
                            <div class="button">
                                <a class="btn" href="./chi-siamo/">Approfondisci</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- section filos in breve - end -->


     <!-- section sedi -start -->
    <section class="sedi-section" style="background: url(<?php echo get_template_directory_uri(); ?>/imgs/sedeBackground.png) no-repeat center center; background-size: 35% 100%;">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <h1 class="display-3 section-title">Sedi</h1>
            </div>
            <div class="row justify-content-center card-row">
                <div class="col-sm-4 p-5 card-col">
                <a href="./sedi-e-contatti/?citta=novara">
                <div class="card">
                    <!-- inserire di seguito l'immagine delle sede -->
                    <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/imgs/news/news6.jpeg" alt="Foto sede Novara">
                        <div class="sede"><p>Novara</p></div>
                </div></a>
                </div>
                <div class="col-sm-4 p-5 card-col">
                <a href="./sedi-e-contatti/?citta=torino">
                    <div class="card">
                    <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/imgs/sedeTorino.jpg" alt="Foto sede Torino">
                        <div class="sede"><p>Torino</p></div>
                    </div></a>
                </div>
            </div>
    </section>
    <!-- section sedi - end -->

    <!-- section testimonianze - start -->  
    <section class="testimonianze-section">
        <div class="row justify-content-center">
            <h1 class="display-3 section-title">Testimonianze</h1>    
        </div>     
        <div class="row justify-content-center pt-5">
            <div class="col-sm-8">
                <div id="carouselTestimonianze" class="carousel slide" data-ride="carousel"  data-interval="10000">
                            <div class="carousel-inner">
                            <?php 
                            $primo = true;
                            query_posts('category_name=slideshow_home_commenti&posts_per_page=3');
                            while (have_posts()) : the_post(); ?>
                                    <div class="carousel-item <? if($primo) echo 'active'; ?>">
                                        <div class="row justify-content-center">
                                            <div class="col-sm-10">
                                                <div class="card">
                                                    <div class="row justify-content-center active">
                                                        <div class="col-sm-4">
                                                            <?php the_post_thumbnail('filos_home', array('class' => 'w-100 rounded-circle testimonial-image')); ?>
                                                        </div>
                                                        <div class="col-sm-8 body align-self-center">
                                                            <p class="title"><?php the_title(); ?></p>
                                                            <blockquote class="blockquote text-justify">
                                                                <img class="open-quote" src="<?php echo get_template_directory_uri(); ?>/imgs/quote.png" alt="blockquote quote icon">
                                                                    <span class="text"><?php $str = get_the_content(); $str = substr($str,0,200).'...'; echo $str; ?></span>
                                                                    <span class="blockquote-footer"><cite title="Nome personaggio"><?php the_field('autore_commento'); ?></cite></span>
                                                                <img class="close-quote" src="<?php echo get_template_directory_uri(); ?>/imgs/quote.png" alt="blockquote quote icon">                                                                
                                                            </blockquote>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php $primo = false; endwhile; ?>
                        </div>
                    <a class="carousel-control-prev" href="#carouselTestimonianze" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselTestimonianze" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    </div>

<?php get_footer(); ?>