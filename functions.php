<?php
  
  function themebenittur_enqueue_scripts() {
    // All styles
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'theme-style', get_template_directory_uri() . '/style.css' );
    // All scripts
    wp_enqueue_script( 'bootstrap',  get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array( 'jquery' ) );
  }

  add_action( 'wp_enqueue_scripts', 'themebenittur_enqueue_scripts' );


?>