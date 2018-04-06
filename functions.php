<?php
  require_once('inc/theme.php');
  require_once('inc/menu.php');
  require_once('inc/cpt_corso.php');  

  function filos_formazione_theme_setup()
    {
      add_theme_support( 'post-thumbnails' );
      add_image_size( 'filos_home', 320, 240, true );
      add_image_size('filos_corsi_background', 1920, 1080, true);
      echo '<style type="text/css">#toplevel_page_edit-post_type-acf{display:none;}</style>';
    }

  add_action( 'after_setup_theme', 'filos_formazione_theme_setup' );

function getMeseAnno($value)
{

  $anno = substr($value, 0, 4);
  $mese = substr($value, 4, 2);

  $italiano = array(
    '01' => 'Gennaio',
    '02' => 'Febbraio',
    '03' => 'Marzo',
    '04' => 'Aprile',
    '05' => 'Maggio',
    '06' => 'Giugno',
    '07' => 'Luglio',
    '08' => 'Agosto',
    '09' => 'Settembre',
    '10' => 'Ottobre',
    '11' => 'Novembre',
    '12' => 'Dicembre'
  );

  return $italiano[$mese] . ' ' . $anno;
}

