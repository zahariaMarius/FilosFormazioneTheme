<?php /* Template Name: Corsi */ ?> 

<?php get_header(); ?>
<?php 

//Valori get recuperati dalla home page
$rivolto_a = isset($_GET['rivolto_a']) ? $_GET['rivolto_a'] : NULL;
$corso = isset($_GET['corso_ricercato']) ? $_GET['corso_ricercato'] : NULL;
$sede = isset($_GET['sede']) ? $_GET['sede'] : NULL;
$orario = isset($_GET['orario']) ? $_GET['orario'] : null;
$costo = isset($_GET['costo']) ? $_GET['costo'] : null;

if($corso == null) $corso = 'acconciatura';

include_once(dirname (__FILE__) . "/dati-comuni/common-corsi.php");

?>



<section class="corsi-section">
<h1 class="hCorsi" style="margin-bottom: 20px;">Corsi</h1>
<div class = "row">
			<div class="col col-4">
				<aside class="form-corso-aside">
                    <form action="" method="get">
                    <div class="form-group">
                        <label for="TipoCorso">Tipo corso</label>
                        <select class="form-control mt-3" id="TipoCorso" name="corso_ricercato" style="background: url(<?php echo get_template_directory_uri(); ?>/imgs/down-arrow2.png) no-repeat right white; -webkit-appearance: none; background-position-x: 95%;">
                            <!--immettere i dati dei corsi qua-->
                            <option disabled selected>Seleziona</option>
                            <option <?php if ($corso == 'acconciatura') echo 'selected'; ?> value="acconciatura">Acconciatura</option>
                            <option <?php if ($corso == 'meccanica') echo 'selected'; ?> value="meccanica">Meccanica</option>
                            <option <?php if ($corso == 'sociosanitario') echo 'selected'; ?> value="sociosanitario">Socio sanitario</option>
                            <option <?php if ($corso == 'termoidraulica') echo 'selected'; ?> value="termoidraulica">Termoidraulica</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Rivolto_a">Rivolto a</label>
                        <select class="form-control mt-3" id="Eta" name="rivolto_a" style="background: url(<?php echo get_template_directory_uri(); ?>/imgs/down-arrow2.png) no-repeat right white; -webkit-appearance: none; background-position-x: 95%;">
                            <!--immettere i dati dei corsi qua-->
                            <option disabled selected>Seleziona</option>
                            <option <?php if ($rivolto_a == 'giovaniobbligoformativo') echo 'selected'; ?> value="giovaniobbligoformativo">Giovani in obbligo formativo (14-18 anni)</option>
                            <option <?php if ($rivolto_a == 'sistemaduale') echo 'selected'; ?> value="sistemaduale">Sistema Duale</option>
                            <option <?php if ($rivolto_a == 'ifts') echo 'selected'; ?> value="ifts">IFTS - Diplomati e Laureati</option>
                            <option <?php if ($rivolto_a == 'disoccupati') echo 'selected'; ?> value="disoccupati">Disoccupati</option>
                            <option <?php if ($rivolto_a == 'inoccupati') echo 'selected'; ?> value="inoccupati">Inoccupati</option>
                            <option <?php if ($rivolto_a == 'occupati') echo 'selected'; ?> value="occupati">Occupati</option>
                            <option <?php if ($rivolto_a == 'cassaintegrati') echo 'selected'; ?> value="cassaintegrati">Cassa Integrati</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="orario">Orario corso</label>
                        <select class="form-control mt-3" id="orario" name="orario" style="background: url(<?php echo get_template_directory_uri(); ?>/imgs/down-arrow2.png) no-repeat right white; -webkit-appearance: none; background-position-x: 95%;">
                            <!--immettere i dati dei corsi qua-->
                            <option disabled selected>Seleziona</option>
                            <option value="diurno">Diurno</option>
                            <option value="diurnomattino">Diurno (solo mattino)</option>
                            <option value="diurnopomeriggio">Diurno (solo pomeriggio)</option>
                            <option value="serale">Serale</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="costo">Costo</label>
                        <select class="form-control mt-3" id="costo" name="costo" style="background: url(<?php echo get_template_directory_uri(); ?>/imgs/down-arrow2.png) no-repeat right white; -webkit-appearance: none; background-position-x: 95%;">
                            <!--immettere i dati dei corsi qua-->
                            <option disabled selected>Seleziona</option>
                            <option value="gratis">Corso GRATUITO</option>
                            <option value="cofinanziato">Corso a Pagamento - Corso cofinanziato dal Fondo Sociale Europeo nell'ambito del Programma Operativo FSE Piemonte 2014-2020</option>
                            <option value="apagamento">Corso a Pagamento </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="sede">Sede</label>
                        <select class="form-control mt-3" id="sede" name="sede" style="background: url(<?php echo get_template_directory_uri(); ?>/imgs/down-arrow2.png) no-repeat right white; -webkit-appearance: none; background-position-x: 95%;">
                            <!--immettere i dati dei corsi qua-->
                            <option disabled selected>Seleziona</option>
                            <option <?php if ($sede == 'novara') echo 'selected'; ?> value="novara">Novara</option>
                            <option <?php if ($sede == 'torino') echo 'selected'; ?> value="torino">Torino</option>
                        </select>
                    </div>
                    <button class="btn btn-light btn-cerca">Cerca</button>
                    </form>
                </aside>
            </div>

            <div class="col-sm-8">
                <div class="row justify-content-center">
                <?php if ($the_query->have_posts()) : ?>
	            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="col-sm-5">
                        <div class="card">
                        <!-- per ogni news inserire l'immagine qua sotto, con alt rispettivo -->
                            <?php the_post_thumbnail('filos_home',array('class'=>'card-img-top')); ?>
                            <a href="<?php the_permalink(); ?>"><div class="overlay-card-img-top"></div></a>
                            <div class="card-body">
                                <!-- qua inserire il titolo della news -->
                                <h5 class="card-title"><?php the_title(); ?></h5>
                                <!-- qua inserire la descrizione della news, e non l'intero corpo siccome è una breve presentazione di essa -->
                                <p class="card-text mb-4"><?php 
                                                            $str = get_field('obiettivi_e_descrizione_del_corso');
                                                            echo substr($str, 0, 120);
                                                            echo '...'; ?></p>
                                <div class="course-detail">
                                    <div class="row mt-4">
                                        <div class="col-sm-3">
                                            <img src="<?php echo get_template_directory_uri(); ?>/imgs/corsi/dettaglioCorso/calendario.png" alt="">
                                        </div>
                                        <div class="col-sm-9 align-self-center">
                                            <p> <span>Periodo: </span>da <?php echo getMeseAnno(get_field('periodo_corso_inizio')); ?> a <?php echo getMeseAnno(get_field('periodo_corso_fine')); ?></p>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-sm-3">
                                            <img src="<?php echo get_template_directory_uri(); ?>/imgs/corsi/dettaglioCorso/clock.png" alt="">                                            
                                        </div>
                                        <div class="col-sm-9 align-self-center">
                                            <p> <span>Orario: </span><?php the_field('orario'); ?></p>
                                        </div>
                                    </div>
                                    <div class="row mt-4 mb-5">
                                        <div class="col-sm-3 align-self-center">
                                            <img src="<?php echo get_template_directory_uri(); ?>/imgs/corsi/dettaglioCorso/portafogli.png" alt="">                                            
                                        </div>
                                        <div class="col-sm-9 align-self-center">
                                            <p> <span>Costi: </span><?php the_field('costi'); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="scopri-di-piu">
                                    <a href="<?php the_permalink(); ?>"><p>Scopri di più</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?>    
                </div>
            </div>
            <?php wp_reset_query(); ?>
</div>


</section>
<?php get_footer(); ?>

