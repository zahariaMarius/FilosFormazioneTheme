<?php 

function register_corso_cpt() {
    $labels = array(
        'name'                => 'Corsi',
        'menu_name'           => 'Corsi',
    );
    $args = array(
      'label'               => 'Corsi',
      'description'         => 'I Corsi',
      'labels'              => $labels,
      'supports'            => array('title', 'editor', 'thumbnail', 'excerpt'),
      'hierarchical'        => false,
      'public'              => true,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'menu_position'       => 8,
      'menu_icon'           => 'dashicons-admin-customizer',
      'show_in_admin_bar'   => true,
      'show_in_nav_menus'   => true,
      'can_export'          => true,
      'has_archive'         => true,
      'exclude_from_search' => false,
      'publicly_queryable'  => true,
      'capability_type'     => 'post',
    );
    register_post_type( 'corso',  $args );
  }
  
  add_action( 'init', 'register_corso_cpt' );

?>