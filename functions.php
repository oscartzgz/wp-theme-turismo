<?php
  
  function themebenittur_enqueue_scripts() {
    // All styles
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'theme-style', get_template_directory_uri() . '/style.css' );
    // All scripts
    wp_enqueue_script( 'bootstrap',  get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array( 'jquery' ) );
    wp_enqueue_script( 'sitejs',  get_template_directory_uri() . '/js/site.js', array( 'jquery' ) );
    wp_enqueue_script( 'smtpjs',  get_template_directory_uri() . '/js/smtp.js', array( 'jquery' ) );
  }

  add_action( 'wp_enqueue_scripts', 'themebenittur_enqueue_scripts' );

  add_theme_support('post-thumbnails');

  @ini_set( 'upload_max_size' , '64M' );
  @ini_set( 'post_max_size', '64M');
  @ini_set( 'max_execution_time', '300' );

?>