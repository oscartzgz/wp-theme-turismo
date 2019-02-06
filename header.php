<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title><?php // echo get_bloginfo( 'name' ); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <?php wp_head(); ?>
  </head>
  <body>
    
    <header>
      <div class="logo-container">
        <div class="row">
          <div class="col-lg-3">
            <img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="logo benittur vagabundo">
          </div>
        </div>
      </div>

      <div class="call-us text-center">
        Llamanos 01 800 849 1438
      </div>

      <div class="menu-container">
        <nav class="menu">
          <ul class="row">
            <li id="section1" class="col text-center" >
              <a href="#travels">Viajes</a>
            </li>
            <li id="section1" class="col text-center" >
              <a href="#units">Unidades</a>
            </li>
            <li id="section1" class="col text-center" >
              <a href="#agency">Agencia de viajes</a>
            </li>
          </ul>
        </nav>
      </div>

    </header>