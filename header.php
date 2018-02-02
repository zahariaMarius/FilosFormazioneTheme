<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">

    <!-- Generate favicon, apple touch icons and Windows Phone icon at http://realfavicongenerator.net/ -->
    <!-- Esempio: -->
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-32x32.png" sizes="32x32">

    <!-- Boostrap style -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Boostrap style -->
    
    <!-- Questo pezzo di codice permette di impostare l'immagine per facebook e twitter se ci si trova in una pagina con featured image impostata da backoffice -->
    <?php $page_image = $post ? get_the_post_thumbnail_url($post, 'huge') : false; ?>
    <?php if ($page_image): ?>
      <meta property="og:image" content="<?php echo $page_image; ?>" />
      <meta name="twitter:image" content="<?php echo $page_image; ?>">
    <?php endif ?>

    <!-- Questa funzione di Wordpress carica tutti i tag della head impostati da Wordpress -->
    <?php wp_head(); ?>
  </head>

  <!-- link al font - start -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500" rel="stylesheet">
  <!-- link al font - end -->

  <!-- La funzione di Wordpress body_class() aggiunge al body delle classi specifiche in base alla pagina sulla quale ci si trova -->
  <!-- Questo permette di stylare con il css specificatamente elementi di diverse pagine -->
  <body <?php body_class(); ?>>

  <nav class="navbar navbar-expand-lg">
  <a class="navbar-brand" href="<?php echo get_page_link( get_option('page_on_front') ); ?>">
    <img src="<?php echo get_template_directory_uri(); ?>/imgs/logo.png" alt="Filos Formazione Logo">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
    <?php header_menu(); ?>
  </div>
  <a class="btn" href="#">Richiedi Informazioni</a>
</nav>
