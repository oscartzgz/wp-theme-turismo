<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title><?php echo get_bloginfo( 'name' ); ?></title>
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


      <div class="row">
        <div class="col-xl-8 offset-xl-2">
          <div class="call-us text-center">
            <a href="tel:01-800-849-1438">Llámanos 01 800 849 1438</a>
          </div>
          
          <div class="menu-container">
            <nav class="menu">
              <ul class="row no-gutters">
                <li id="section1" class="col text-center" >
                  <a href="#travelTypes">Renta</a>
                </li>
                <li id="section1" class="col text-center" >
                  <a href="#travels">Viajes</a>
                </li>
                <li id="section1" class="col text-center" >
                  <a href="#units">Unidades</a>
                </li>
                <li id="section1" class="col text-center" >
                  <a href="#agency">Agencia</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>

        <div class="col-xl-2 text-right">
          
          <div class="social-container">
            <a href="https://www.facebook.com/AutotransportesBenittur" target="_blank">
              <img src="<?php echo get_template_directory_uri() ?>/img/facebook-2-32.png" alt="">
            </a>

            <a href="https://www.facebook.com/benittur" target="_blank">
              <img src="<?php echo get_template_directory_uri() ?>/img/facebook-2-32.png" alt="">
            </a>
          </div>
        </div>
      </div>




    </header>