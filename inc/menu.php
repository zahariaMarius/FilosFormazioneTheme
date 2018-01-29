<?php

// Registriamo il menu dell'header, in modo che poi possa essere posizionato nell'HTML
function register_custom_menus() {
  register_nav_menus( array(
      'header' 	=> 	'Header Menu',
  ));
}
add_action( 'init', 'register_custom_menus' );

// Add a link custom class 
function add_menuclass($ulclass) {
    return preg_replace('/<a /', '<a class="nav-link px-4"', $ulclass);
 }
 add_filter('wp_nav_menu','add_menuclass');


//////////////////////////////
//     FUNZIONI GLOBALI     //
//////////////////////////////

// Le seguenti funzioni non vengono associate a nessun Hook, ma verranno usate nei nostri template

// Questa funzione serve per posizionare il menu header che abbiamo creato nell'hook poco sopra.
// Notare come theme_location porti lo stesso nome identificativo del menu che abbiamo registrato.
function header_menu() {
  wp_nav_menu(
      array(
          'theme_location'  => 'header',
          'menu'            => '',
          'container'       => '',
          'container_class' => '',
          'container_id'    => '',
          'menu_class'      => '',
          'menu_id'         => '',
          'echo'            => true,
          'fallback_cb'     => '',
          'before'          => '',
          'after'           => '',
          'link_before'     => '',
          'link_after'      => '',
          'items_wrap'      => '<ul class="navbar-nav mr-auto">%3$s</ul>',
          'depth'           => 2,
          'walker'          => ''
      )
  );
}

?>
