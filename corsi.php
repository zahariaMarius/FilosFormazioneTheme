<?php /* Template Name: Corsi */ ?>

<?php get_header(); ?>
<section class="corsi-section">
<h1 class="hCorsi">Corsi</h1>
<div class = "row">
			<div class="col col-3">
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
</div>
<!--Qui aggiungere le card in base alla ricerca fatta-->

</section>
<?php get_footer(); ?>