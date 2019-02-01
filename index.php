<?php get_header(); ?>

<section id="welcome">
  <video autoplay muted loop id="home-video">
    <source src="<?php echo get_template_directory_uri() ?>/video/video.webm" type="video/webm">
  </video>
  <div class="pattern-overlay"></div>
  <div class="row">
    <div class="col-lg-10 offset-lg-1 text-center">
      <h2 class="big-message">Los mejores viajes a tu alance</h2>
    </div>
  </div>
</section>

<section id="travels">
  <div class="title">
    Nuestros Próximos Viajes
  </div>
  <div class="subtitle">
    Nunca antes viajar fue tan facil, ponte en contacto con nosotros
  </div>

  <div class="content">
    <div class="item">
      <img src="<?php echo get_template_directory_uri() ?>/img/six_terros-02.png" alt="travel_image">
    </div>
    <div class="item">
      <img src="<?php echo get_template_directory_uri() ?>/img/fresnillo-02.png" alt="travel_image">
    </div>
    <div class="item">
      <img src="<?php echo get_template_directory_uri() ?>/img/basílica-02.png" alt="travel_image">
    </div>
    <div class="item">
      <img src="<?php echo get_template_directory_uri() ?>/img/chiapas.png" alt="travel_image">
    </div>
    <div class="item">
      <img src="<?php echo get_template_directory_uri() ?>/img/ixtapa.png" alt="travel_image">
    </div>
    <div class="item">
      <img src="<?php echo get_template_directory_uri() ?>/img/chignahuapan-02.png" alt="travel_image">
    </div>
  </div>
</section>

<section id="units">
  <div class="background"></div>
  <div class="title">CONTAMOS CON LAS MEJORES UNIDADES</div>
  <div class="row">
    <div class="col-sm-12 text-center">
      <div class="subtitle bg-white">Descubre la que mejor se adapta a tus necesidades</div>
    </div>
  </div>

  <div class="content">
    <div class="row">
      <div class="col-sm-12">
        
        <!-- Menu SLIDER -->
        <div class="menu-slider">
          <ul class="row">
            <li class="col text-center">
              <span class="button" href="#" onclick="jQuery('#carouselExampleSlidesOnly').carousel(0);">Vehiculo UNO</span>
            </li>
            <li class="col text-center">
              <span class="button" href="#" onclick="jQuery('#carouselExampleSlidesOnly').carousel(1);">Vehiculo DOS</span>
            </li>
            <li class="col text-center">
              <span class="button" href="#" onclick="jQuery('#carouselExampleSlidesOnly').carousel(2);">Vehiculo TRES</span>
            </li>
          </ul>
        </div>

        <!-- SLIDER CON LOS AUTOBUSES -->
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">

            <!-- Default Active Item -->

            <div class="carousel-item active">
              <div class="row">
                <div class="col-sm-8">
                  <img class="d-block w-100" src="<?php echo get_template_directory_uri() ?>/img/bus1.png" alt="First slide">
                </div>
                <div class="col-sm-4">
                  <div class="specs-container">
                    <div class="header text-center">
                      Vehiculo UNO
                    </div>
                    <div class="body">
                      <ul>
                        <li><i class="material-icons">grade</i> Comodo</li>
                        <li><i class="material-icons">grade</i> Perron</li>
                        <li><i class="material-icons">grade</i> Veloz</li>
                        <li><i class="material-icons">grade</i> La Onda</li>
                        <li><i class="material-icons">grade</i> W.C.</li>
                      </ul>
                    </div>
                    <div class="footer text-center">
                      <span class="button">Ver Diagrama</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="row">
                <div class="col-sm-8">
                  <img class="d-block w-100" src="<?php echo get_template_directory_uri() ?>/img/bus1.png" alt="First slide">
                </div>
                <div class="col-sm-4">
                  <div class="specs-container">
                    <div class="header text-center">
                      Vehiculo DOOS
                    </div>
                    <div class="body">
                      <ul>
                        <li><i class="material-icons">grade</i> Comodo</li>
                        <li><i class="material-icons">grade</i> Perron</li>
                        <li><i class="material-icons">grade</i> Veloz</li>
                        <li><i class="material-icons">grade</i> La Onda</li>
                        <li><i class="material-icons">grade</i> W.C.</li>
                      </ul>
                    </div>
                    <div class="footer text-center">
                      <span class="button">Ver Diagrama</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="row">
                <div class="col-sm-8">
                  <img class="d-block w-100" src="<?php echo get_template_directory_uri() ?>/img/bus1.png" alt="First slide">
                </div>
                <div class="col-sm-4">
                  <div class="specs-container">
                    <div class="header text-center">
                      Vehiculo TREEES
                    </div>
                    <div class="body">
                      <ul>
                        <li><i class="material-icons">grade</i> Comodo</li>
                        <li><i class="material-icons">grade</i> Perron</li>
                        <li><i class="material-icons">grade</i> Veloz</li>
                        <li><i class="material-icons">grade</i> La Onda</li>
                        <li><i class="material-icons">grade</i> W.C.</li>
                      </ul>
                    </div>
                    <div class="footer text-center">
                      <span class="button">Ver Diagrama</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>



          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="agency" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/agency2.jpg')">
  <div class="title">Viajes a tu medida</div>
  <div class="row">
    <div class="col-sm-12 text-center">
      <div class="subtitle bg-white">Planear un viaje es dificil, nosotros lo hacemos por ti</div>
    </div>
  </div>
  <div class="content">
    <div class="row align-items-center">
      <div class="col-lg-6 text-right">
        <img class="agency-logo" src="<?php echo get_template_directory_uri() ?>/img/agencia_logo.png" alt="logo agencia sahagun">
      </div>
      <div class="col-lg-6">
        <div class="copy">No te preocupes, nosotros nos encargamos de que tu experiencia sea la mejor. Nuestra agencia de viajes se encargará de resolver los problemas de transporte y alojamiento, puedes estar tranquilo.</div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>