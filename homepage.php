<?php /* Template Name: Homepage */ ?>

<?php get_header(); ?>

    <!-- section that contain the slideshow - start -->
    <section class="slideshow_section">
        <div id="newsCarousel" class="carousel slide" data-ride="carousel" data-interval="10000">
            <ol class="carousel-indicators mb-5">
                <!-- inserire il contenuto della data-slide-to per ogni indice presente, il primo deve essere active - start -->
                <li data-target="#newsCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#newsCarousel" data-slide-to="1"></li>
                <li data-target="#newsCarousel" data-slide-to="2"></li>
                <!-- inserire il contenuto della data-slide-to per ogni indice presente - start -->
            </ol>
            <div class="carousel-inner">    
                <div class="carousel-item active">
                    <!-- inserire il contenuto della slideshow in questo blocco solamente l'immagine - start -->
                    <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/imgs/carousel/slideimage.jpeg" alt="First slide">
                    <!-- inserire il contenuto della slideshow in questo blocco, solamente l'immagine - end -->
                    <div class="carousel-caption d-none d-md-block">
                        <!-- inserire il contenuto della slideshow in questo blocco, ripettivamente: Titolo, Sottotitolo e bottone - start -->
                        <h1 class="carousel-title display-1">Open Day</h1> 
                        <h5 class="carousel-subtitle display-4">Vieni a conoscre i nuovi corsi 2018</h5>
                        <a class="carousel-button btn btn-danger text-center" href="#">Scopri di più</a>
                        <!-- inserire il contenuto della slideshow in questo blocco, ripettivamente: Titolo, Sottotitolo e bottone - end -->
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/imgs/carousel/slideimage.jpeg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="carousel-title display-1">Open Day</h1>
                        <h5 class="carousel-subtitle display-4">Vieni a conoscre i nuovi corsi 2018</h5>
                        <a class="carousel-button btn btn-danger text-center" href="#">Scopri di più</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/imgs/carousel/slideimage.jpeg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="carousel-title display-1">Open Day</h1>
                        <h5 class="carousel-subtitle display-4">Vieni a cnoscre i nuovi corsi 2018</h5>
                        <a class="carousel-button btn btn-danger text-center" href="#">Scopri di più</a>
                    </div>
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
        </div>
    </section>
    <!-- section that contain the slideshow - end -->
    
    <section class="courses_section mt-5">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-sm-2 text-center">
                    <h1 class="display-1">Corsi</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-4 p-5">
                    <div class="card rounded-0 text-center">
                        <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/imgs/corsi/logoMeccanica.jpeg" alt="logo corso meccanica">
                        <div class="card-img-overlay card-img-overlay-corsi">
                            <img class="card-title" src="<?php echo get_template_directory_uri(); ?>/imgs/corsi/iconaMeccanica.png" alt="">
                            <p class="card-text">MECCANICA</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 p-5">
                    <div class="card rounded-0 text-center">
                        <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/imgs/corsi/logoTermoidraulica.jpeg" alt="logo corso termoidraulica">
                        <div class="card-img-overlay card-img-overlay-corsi">
                            <img class="card-title" src="<?php echo get_template_directory_uri(); ?>/imgs/corsi/iconaMeccanica.png" alt="">
                            <p class="card-text">TERMOIDRAULICA</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-4 p-5">
                    <div class="card rounded-0 text-center">
                        <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/imgs/corsi/logoSociosanitario.jpeg" alt="logo corso socio sanitario">
                        <div class="card-img-overlay card-img-overlay-corsi">
                            <img class="card-title" src="<?php echo get_template_directory_uri(); ?>/imgs/corsi/iconaMeccanica.png" alt="">
                            <p class="card-text">SOCIOSANITARIO</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 p-5">
                    <div class="card rounded-0 text-center">
                        <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/imgs/corsi/logoAcconciatura.jpeg" alt="logo corso acconciatura">
                        <div class="card-img-overlay card-img-overlay-corsi">
                            <img class="card-title" src="<?php echo get_template_directory_uri(); ?>/imgs/corsi/iconaMeccanica.png" alt="">
                            <p class="card-text">ACCONCIATURA</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<div class="trova-il-tuo-corso">
<h1 class="titolo">Trova il tuo Corso</h1>
</div>

<?php get_footer(); ?>