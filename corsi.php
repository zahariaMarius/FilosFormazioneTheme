<?php /* Template Name: Corsi */ ?> 

<?php get_header(); ?>
<section class="corsi-section">
<h1 class="hCorsi">Corsi</h1>
<div class = "row">
			<div class="col col-4">
				<aside class="form-corso-aside">
                    <form>
                    <div class="form-group">
                        <label for="TipoCorso">Tipo corso</label>
                        <select class="form-control mt-3" id="TipoCorso" style="background: url(<?php echo get_template_directory_uri(); ?>/imgs/down-arrow2.png) no-repeat right white; -webkit-appearance: none; background-position-x: 95%;">
                            <!--immettere i dati dei corsi qua-->
                            <option>Termoidraulica</option>
                            <option>Acconciatura</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Eta">Età</label>
                        <select class="form-control mt-3" id="Eta" style="background: url(<?php echo get_template_directory_uri(); ?>/imgs/down-arrow2.png) no-repeat right white; -webkit-appearance: none; background-position-x: 95%;">
                            <!--immettere i dati dei corsi qua-->
                            <option>Maggiorenne</option>
                            <option>Minorenne</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="orario">Orario corso</label>
                        <select class="form-control mt-3" id="orario" style="background: url(<?php echo get_template_directory_uri(); ?>/imgs/down-arrow2.png) no-repeat right white; -webkit-appearance: none; background-position-x: 95%;">
                            <!--immettere i dati dei corsi qua-->
                            <option>Diurno</option>
                            <option>Serale</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="costo">Costo</label>
                        <select class="form-control mt-3" id="costo" style="background: url(<?php echo get_template_directory_uri(); ?>/imgs/down-arrow2.png) no-repeat right white; -webkit-appearance: none; background-position-x: 95%;">
                            <!--immettere i dati dei corsi qua-->
                            <option>Gratis</option>
                            <option>A pagamento</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="sede">Sede</label>
                        <select class="form-control mt-3" id="sede" style="background: url(<?php echo get_template_directory_uri(); ?>/imgs/down-arrow2.png) no-repeat right white; -webkit-appearance: none; background-position-x: 95%;">
                            <!--immettere i dati dei corsi qua-->
                            <option>Novara</option>
                            <option>Torino</option>
                        </select>
                    </div>
                    <button class="btn btn-light btn-cerca">Cerca</button>
                    </form>
                </aside>
            </div>

            <div class="col-sm-8">
                <div class="row justify-content-center">
                    <div class="col-sm-5">
                        <div class="card">
                        <!-- per ogni news inserire l'immagine qua sotto, con alt rispettivo -->
                            <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/imgs/news/news1.jpeg" alt="News titolo">
                            <div class="overlay-card-img-top">
                                <!-- qua inserire la data di quando la news è stata inserita nel db -->
                                <div class="data-news">15 Gennaio 2018</div>
                            </div>
                            <div class="card-body">
                                <!-- qua inserire il titolo della news -->
                                <h5 class="card-title">Lorem ipsum dolor sit amet</h5>
                                <!-- qua inserire la descrizione della news, e non l'intero corpo siccome è una breve presentazione di essa -->
                                <p class="card-text mb-4">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="course-detail">
                                    <div class="row mt-4">
                                        <div class="col-sm-3">
                                            <img src="<?php echo get_template_directory_uri(); ?>/imgs/corsi/dettaglioCorso/calendario.png" alt="">
                                        </div>
                                        <div class="col-sm-9 align-self-center">
                                            <p> <span>Periodo: </span>settembre 2016 - giugno 2017</p>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-sm-3">
                                            <img src="<?php echo get_template_directory_uri(); ?>/imgs/corsi/dettaglioCorso/clock.png" alt="">                                            
                                        </div>
                                        <div class="col-sm-9 align-self-center">
                                            <p> <span>Orario: </span>diurno</p>
                                        </div>
                                    </div>
                                    <div class="row mt-4 mb-5">
                                        <div class="col-sm-3 align-self-center">
                                            <img src="<?php echo get_template_directory_uri(); ?>/imgs/corsi/dettaglioCorso/portafogli.png" alt="">                                            
                                        </div>
                                        <div class="col-sm-9 align-self-center">
                                            <p> <span>Costi: </span>Gratuito</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="scopri-di-piu">
                                    <p>Scopri di più</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="card">
                        <!-- per ogni news inserire l'immagine qua sotto, con alt rispettivo -->
                            <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/imgs/news/news1.jpeg" alt="News titolo">
                            <div class="overlay-card-img-top">
                                <!-- qua inserire la data di quando la news è stata inserita nel db -->
                                <div class="data-news">15 Gennaio 2018</div>
                            </div>
                            <div class="card-body">
                                <!-- qua inserire il titolo della news -->
                                <h5 class="card-title">Lorem ipsum dolor sit amet</h5>
                                <!-- qua inserire la descrizione della news, e non l'intero corpo siccome è una breve presentazione di essa -->
                                <p class="card-text mb-4">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="course-detail">
                                    <div class="row mt-4">
                                        <div class="col-sm-3">
                                            <img src="<?php echo get_template_directory_uri(); ?>/imgs/corsi/dettaglioCorso/calendario.png" alt="">
                                        </div>
                                        <div class="col-sm-9 align-self-center">
                                            <p> <span>Periodo: </span>settembre 2016 - giugno 2017</p>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-sm-3">
                                            <img src="<?php echo get_template_directory_uri(); ?>/imgs/corsi/dettaglioCorso/clock.png" alt="">                                            
                                        </div>
                                        <div class="col-sm-9 align-self-center">
                                            <p> <span>Orario: </span>diurno</p>
                                        </div>
                                    </div>
                                    <div class="row mt-4 mb-5">
                                        <div class="col-sm-3 align-self-center">
                                            <img src="<?php echo get_template_directory_uri(); ?>/imgs/corsi/dettaglioCorso/portafogli.png" alt="">                                            
                                        </div>
                                        <div class="col-sm-9 align-self-center">
                                            <p> <span>Costi: </span>Gratuito</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="scopri-di-piu">
                                    <p>Scopri di più</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-5">
                    <div class="col-sm-5">
                        <div class="card">
                        <!-- per ogni news inserire l'immagine qua sotto, con alt rispettivo -->
                            <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/imgs/news/news1.jpeg" alt="News titolo">
                            <div class="overlay-card-img-top">
                                <!-- qua inserire la data di quando la news è stata inserita nel db -->
                                <div class="data-news">15 Gennaio 2018</div>
                            </div>
                            <div class="card-body">
                                <!-- qua inserire il titolo della news -->
                                <h5 class="card-title">Lorem ipsum dolor sit amet</h5>
                                <!-- qua inserire la descrizione della news, e non l'intero corpo siccome è una breve presentazione di essa -->
                                <p class="card-text mb-4">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="course-detail">
                                    <div class="row mt-4">
                                        <div class="col-sm-3">
                                            <img src="<?php echo get_template_directory_uri(); ?>/imgs/corsi/dettaglioCorso/calendario.png" alt="">
                                        </div>
                                        <div class="col-sm-9 align-self-center">
                                            <p> <span>Periodo: </span>settembre 2016 - giugno 2017</p>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-sm-3">
                                            <img src="<?php echo get_template_directory_uri(); ?>/imgs/corsi/dettaglioCorso/clock.png" alt="">                                            
                                        </div>
                                        <div class="col-sm-9 align-self-center">
                                            <p> <span>Orario: </span>diurno</p>
                                        </div>
                                    </div>
                                    <div class="row mt-4 mb-5">
                                        <div class="col-sm-3 align-self-center">
                                            <img src="<?php echo get_template_directory_uri(); ?>/imgs/corsi/dettaglioCorso/portafogli.png" alt="">                                            
                                        </div>
                                        <div class="col-sm-9 align-self-center">
                                            <p> <span>Costi: </span>Gratuito</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="scopri-di-piu">
                                    <p>Scopri di più</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="card">
                        <!-- per ogni news inserire l'immagine qua sotto, con alt rispettivo -->
                            <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/imgs/news/news1.jpeg" alt="News titolo">
                            <div class="overlay-card-img-top">
                                <!-- qua inserire la data di quando la news è stata inserita nel db -->
                                <div class="data-news">15 Gennaio 2018</div>
                            </div>
                            <div class="card-body">
                                <!-- qua inserire il titolo della news -->
                                <h5 class="card-title">Lorem ipsum dolor sit amet</h5>
                                <!-- qua inserire la descrizione della news, e non l'intero corpo siccome è una breve presentazione di essa -->
                                <p class="card-text mb-4">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="course-detail">
                                    <div class="row mt-4">
                                        <div class="col-sm-3">
                                            <img src="<?php echo get_template_directory_uri(); ?>/imgs/corsi/dettaglioCorso/calendario.png" alt="">
                                        </div>
                                        <div class="col-sm-9 align-self-center">
                                            <p> <span>Periodo: </span>settembre 2016 - giugno 2017</p>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-sm-3">
                                            <img src="<?php echo get_template_directory_uri(); ?>/imgs/corsi/dettaglioCorso/clock.png" alt="">                                            
                                        </div>
                                        <div class="col-sm-9 align-self-center">
                                            <p> <span>Orario: </span>diurno</p>
                                        </div>
                                    </div>
                                    <div class="row mt-4 mb-5">
                                        <div class="col-sm-3 align-self-center">
                                            <img src="<?php echo get_template_directory_uri(); ?>/imgs/corsi/dettaglioCorso/portafogli.png" alt="">                                            
                                        </div>
                                        <div class="col-sm-9 align-self-center">
                                            <p> <span>Costi: </span>Gratuito</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="scopri-di-piu">
                                    <p>Scopri di più</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>


</section>
<?php get_footer(); ?>