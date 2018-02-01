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

    <div class="container-fluid">
    <section class="courses_section mt-5">
            <div class="row justify-content-center">
                <div class="col-sm-2 text-center">
                    <h1 class="display-3 section-title">Corsi</h1>
                </div>
            </div>
            <!-- se i corsi sono dispari creare classi row ogni 3 oggetti, se invece sono pari ogni 2 -->
            <!-- qua i contenuti sono pari quindi le righe che contengono 2 macro corsi a testa
                sotto inizia la riga con classe .row, importante mantenere le stesse classi -->
            <div class="row justify-content-center">
                <div class="col-sm-4 p-5">
                    <div class="card card-corso rounded-0 text-center">
                        <!-- inserire il contenuto dei macro corsi offerti in questo blocco, rispettivamente: immagine di sfondo, icona che rappresenta il corso e nome del corso - start -->
                        <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/imgs/corsi/logoMeccanica.jpeg" alt="logo corso meccanica">
                        <div class="card-img-overlay meccanica">
                            <img class="card-title" src="<?php echo get_template_directory_uri(); ?>/imgs/corsi/iconaMeccanica.png" alt="">
                            <p class="card-text">MECCANICA</p>
                        </div>
                        <!-- inserire il contenuto dei macro corsi offerti in questo blocco, rispettivamente: immagine di sfondo, icona che rappresenta il corso e nome del corso - start -->                        
                    </div>
                </div> 
                <div class="col-sm-4 p-5">
                    <div class="card card-corso rounded-0 text-center">
                        <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/imgs/corsi/logoTermoidraulica.jpeg" alt="logo corso termoidraulica">
                        <div class="card-img-overlay termoidraulica">
                            <img class="card-title title-termoidraulica" src="<?php echo get_template_directory_uri(); ?>/imgs/corsi/iconaTermoidraulica.png" alt="">
                            <p class="card-text">TERMOIDRAULICA</p>
                        </div>
                    </div>
                </div>
            </div> <!-- qua invece finisce la riga e sotto ne inizia un'altra -->
            <div class="row justify-content-center">
                <div class="col-sm-4 p-5">
                    <div class="card card-corso rounded-0 text-center">
                        <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/imgs/corsi/logoSociosanitario.jpeg" alt="logo corso socio sanitario">
                        <div class="card-img-overlay sociosanitario">
                            <img class="card-title" src="<?php echo get_template_directory_uri(); ?>/imgs/corsi/iconaSociosanitario.png" alt="">
                            <p class="card-text">SOCIO SANITARIO</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 p-5">
                    <div class="card card-corso rounded-0 text-center">
                        <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/imgs/corsi/logoAcconciatura.jpeg" alt="logo corso acconciatura">
                        <div class="card-img-overlay acconciatura">
                            <img class="card-title title-acconciatura" src="<?php echo get_template_directory_uri(); ?>/imgs/corsi/iconaAcconciatura.png" alt="">
                            <p class="card-text">ACCONCIATURA</p>
                        </div>
                    </div>
                </div>
            </div>
    </section>
<!--- chisura container -->
</div>

    <!-- section trova corso -start -->
    <section class="trova-corso-section mt-5" style="background: url(<?php echo get_template_directory_uri(); ?>/imgs/sectionTrovacorso.jpeg); background-size: 100% 100%;">
        <div class="form-container">
            <div class="row justify-content-center mb-5">
                <div class="col-sm-6 text-center">
                    <h1 class="display-3">Trova il tuo corso</h1>
                </div>
            </div>
            <div class="row justify-content-center align-middle">
                <div class="col-sm-3">
                    <form>
                        <div class="form-group text-center py-4">
                            <!-- inserire per ogni label il contenuto -->
                            <label class="mb-3" for="formSelectTitoloStudio">Qual è il tuo titolo di studio?</label>
                            <select class="form-control" id="formSelectTitoloStudio" style="background: url(<?php echo get_template_directory_uri(); ?>/imgs/down-arrow2.png) no-repeat right white; -webkit-appearance: none; background-position-x: 95%;">
                                <option disabled selected>Seleziona</option>
                                <!-- inserire per ogni select le option in maniera dinamica, lasciare quella di default -->
                            </select>
                        </div>
                        <div class="form-group text-center py-4">
                            <!-- inserire per ogni label il contenuto -->
                            <label class="mb-3" for="formSelectTitoloStudio">A quale corso sei interessato?</label>
                            <select class="form-control" id="formSelectTitoloStudio" style="background: url(<?php echo get_template_directory_uri(); ?>/imgs/down-arrow2.png) no-repeat right white; -webkit-appearance: none; background-position-x: 95%;">
                                <option disabled selected>Seleziona</option>
                                <!-- inserire per ogni select le option in maniera dinamica, lasciare quella di default -->
                            </select>
                        </div>
                        <div class="form-group text-center py-4">
                            <!-- inserire per ogni label il contenuto -->
                            <label class="mb-3" for="formSelectTitoloStudio">Qual è la sede che preferisci?</label>
                            <select class="form-control" id="formSelectTitoloStudio" style="background: url(<?php echo get_template_directory_uri(); ?>/imgs/down-arrow2.png) no-repeat right white; -webkit-appearance: none; background-position-x: 95%;">
                                <option disabled selected>Seleziona</option>
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
    <section class="section-news mt-5">
        <div class="container-fluid">
        <div class="row justify-content-center">
                <div class="col-sm-6 text-center">
                    <h1 class="display-3 section-title">News</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-4 p-5">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/imgs/corsi/logoSociosanitario.jpeg" alt="Card image cap">
                        <div class="overlay-card-img-top">
                            <div class="data-news">15 Gennaio 2018</div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Lorem ipsum dolor sit amet</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="scopri-di-piu">
                                <p>Scopri di più</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 p-5">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/imgs/corsi/logoSociosanitario.jpeg" alt="Card image cap">
                        <div class="overlay-card-img-top">
                            <div class="data-news">15 Gennaio 2018</div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Lorem ipsum dolor sit amet</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="scopri-di-piu">
                                <p>Scopri di più</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 p-5">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/imgs/corsi/logoSociosanitario.jpeg" alt="Card image cap">
                        <div class="overlay-card-img-top">
                            <div class="data-news">15 Gennaio 2018</div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Lorem ipsum dolor sit amet</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="scopri-di-piu">
                                <p>Scopri di più</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-4 p-5">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/imgs/corsi/logoSociosanitario.jpeg" alt="Card image cap">
                        <div class="overlay-card-img-top">
                            <div class="data-news">15 Gennaio 2018</div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Lorem ipsum dolor sit amet</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="scopri-di-piu">
                                <p>Scopri di più</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 p-5">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/imgs/corsi/logoSociosanitario.jpeg" alt="Card image cap">
                        <div class="overlay-card-img-top">
                            <div class="data-news">15 Gennaio 2018</div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Lorem ipsum dolor sit amet</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="scopri-di-piu">
                                <p>Scopri di più</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 p-5">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/imgs/corsi/logoSociosanitario.jpeg" alt="Card image cap">
                        <div class="overlay-card-img-top">
                            <div class="data-news">15 Gennaio 2018</div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Lorem ipsum dolor sit amet</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="scopri-di-piu">
                                <p>Scopri di più</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section news - end -->


<?php get_footer(); ?>