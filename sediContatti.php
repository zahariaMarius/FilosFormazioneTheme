<?php /* Template Name: Sedi e Contatti */ ?> 

<?php get_header(); ?>
<section class="richiedi-informazioni-section">
<div>
<img src="<?php echo get_template_directory_uri(); ?>/imgs/search.jpeg" class="first-img">
</div>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-8 text-center">
            <div>
                <h1 class="richiedi-info">RICHIEDI INFORMAZIONI</h1>
                <h2 class="testo-semplice">Compila il form con i tuoi dati. I campi contrassegnati 
                con un asterisco(*) sono obbligatori.</h2>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-4">
        <form>
  <div class="form-group">
    <label for="Nome">Nome *</label>
    <input type="name" class="form-control" id="Nome">
  </div>
  <div class="form-group">
    <label for="Cognome">Cognome *</label>
    <input type="name" class="form-control" id="Cognome">
  </div>
  <div class="form-group">
    <label for="Eta">Età *</label>
    <input type="number" class="form-control" id="Eta">
  </div>
  <div class="form-group">
    <label for="Genere">Genere *</label>
    <select class="form-control" id="Genere">
      <option>Maschio</option>
      <option>Femmina</option>
     </select>
  </div>
  <div class="form-group">
    <label for="E-mail">Indirizzo e-mail *</label>
    <input type="email" class="form-control" id="E-mail">
  </div>
  <div class="form-group">
    <label for="AltreInformazioni">Eventuali altre informazioni</label>
    <textarea class="form-control" id="AltreInformazioni" rows="3"></textarea>
  </div>
  <button class="btn btn-primary btn-lg btn-invia">Invia</button>

</form>
        </div>
    </div>

    </section>

<?php get_footer(); ?>