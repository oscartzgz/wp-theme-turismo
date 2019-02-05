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
      <div class="col-sm-12 col-lg-8 offset-xl-2 ">
        
        <!-- Menu SLIDER -->
        <div class="menu-slider">
          <ul class="row">
            <li class="col text-center">
              <span class="button" href="#" onclick="jQuery('#carouselUnits').carousel(0);">IRIZAR i8</span>
            </li>
            <li class="col text-center">
              <span class="button" href="#" onclick="jQuery('#carouselUnits').carousel(1);">IRIZAR PB</span>
            </li>
            <li class="col text-center">
              <span class="button" href="#" onclick="jQuery('#carouselUnits').carousel(2);">IRIZAR NC</span>
            </li>
            <li class="col text-center">
              <span class="button" href="#" onclick="jQuery('#carouselUnits').carousel(3);">SPRINTER</span>
            </li>
            <li class="col text-center">
              <span class="button" href="#" onclick="jQuery('#carouselUnits').carousel(4);">HIACE</span>
            </li>
          </ul>
        </div>

        <!-- SLIDER CON LOS AUTOBUSES -->
        <div id="carouselUnits" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">

            <!-- Default Active Item -->

            <div class="carousel-item active">
              <div class="row">
                <div class="col-sm-8 d-flex align-items-center">
                  <img class="d-block w-100" src="<?php echo get_template_directory_uri() ?>/img/unit-i8.png" alt="First slide">
                </div>
                <div class="col-sm-4">
                  <div class="specs-container">
                    <div class="header text-center">
                      IRIZAR i8
                    </div>
                    <div class="body">
                      <ul>
                        <li><i class="material-icons">grade</i> Capacidad para 47 personas</li>
                        <li><i class="material-icons">grade</i> Asientos reclinables</li>
                        <li><i class="material-icons">grade</i> 6 Pantallas</li>
                        <li><i class="material-icons">grade</i> Aire Acondicionado</li>
                        <li><i class="material-icons">grade</i> Sanitario</li>
                        <li><i class="material-icons">grade</i> Micrófono para guía</li>
                        <li><i class="material-icons">grade</i> Audio y video</li>
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
                <div class="col-sm-8 d-flex align-items-center">
                  <img class="d-block w-100" src="<?php echo get_template_directory_uri() ?>/img/unit-pb.png" alt="First slide">
                </div>
                <div class="col-sm-4">
                  <div class="specs-container">
                    <div class="header text-center">
                      IRIZAR PB
                    </div>
                    <div class="body">
                      <ul>
                        <li><i class="material-icons">grade</i> Capacidad para 47 personas</li>
                        <li><i class="material-icons">grade</i> Asientos reclinables</li>
                        <li><i class="material-icons">grade</i> 3 Pantallas</li>
                        <li><i class="material-icons">grade</i> Aire Acondicionado</li>
                        <li><i class="material-icons">grade</i> Sanitario</li>
                        <li><i class="material-icons">grade</i> Micrófono para guía</li>
                        <li><i class="material-icons">grade</i> Audio y video</li>
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
                <div class="col-sm-8 d-flex align-items-center">
                  <img class="d-block w-100" src="<?php echo get_template_directory_uri() ?>/img/unit-nc.png" alt="First slide">
                </div>
                <div class="col-sm-4">
                  <div class="specs-container">
                    <div class="header text-center">
                      IRIZAR NC
                    </div>
                    <div class="body">
                      <ul>
                         <li><i class="material-icons">grade</i> Capacidad para 47 personas</li>
                        <li><i class="material-icons">grade</i> Asientos reclinables</li>
                        <li><i class="material-icons">grade</i> 3 Pantallas</li>
                        <li><i class="material-icons">grade</i> Aire Acondicionado</li>
                        <li><i class="material-icons">grade</i> Sanitario</li>
                        <li><i class="material-icons">grade</i> Micrófono para guía</li>
                        <li><i class="material-icons">grade</i> Audio y video</li>
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
                <div class="col-sm-8 d-flex align-items-center">
                  <img class="d-block w-100" src="<?php echo get_template_directory_uri() ?>/img/unit-sprinter.png" alt="First slide">
                </div>
                <div class="col-sm-4">
                  <div class="specs-container">
                    <div class="header text-center">
                      SPRINTER
                    </div>
                    <div class="body">
                      <ul>
                         <li><i class="material-icons">grade</i> Capacidad para <strong>17</strong> y <strong>20</strong> personas</li>
                        <li><i class="material-icons">grade</i> Asientos reclinables</li>
                        <li><i class="material-icons">grade</i> 2 pantallas de plasma</li>
                        <li><i class="material-icons">grade</i> Aire Acondicionado</li>
                        <li><i class="material-icons">grade</i> Cajuela para equipaje</li>
                        <li><i class="material-icons">grade</i> Micrófono para guía</li>  
                        <li><i class="material-icons">grade</i> Audio y video</li>
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
                <div class="col-sm-8 d-flex align-items-center">
                  <img class="d-block w-100" src="<?php echo get_template_directory_uri() ?>/img/unit-hiace.png" alt="First slide">
                </div>
                <div class="col-sm-4">
                  <div class="specs-container">
                    <div class="header text-center">
                      HIACE
                    </div>
                    <div class="body">
                      <ul>
                         <li><i class="material-icons">grade</i> Capacidad para 13 personas</li>
                        <li><i class="material-icons">grade</i> Asientos reclinables</li>
                        <li><i class="material-icons">grade</i> Aire Acondicionado</li>
                        <li><i class="material-icons">grade</i> Audio y video</li>
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