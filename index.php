<?php get_header(); ?>

<section id="welcome">
  <video autoplay muted loop id="home-video">
    <source src="<?php echo get_template_directory_uri() ?>/video/video.webm" type="video/webm">
  </video>
  <h2 class="big-message">Viaja con <br> nosotros</h2>
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
  <div class="title">CONTAMOS CON LAS MEJORES UNIDADES</div>
  <div class="subtitle">Descubre la que mejor se adapta a tus necesidades</div>

  <div class="content">
    <div class="row">
      <div class="col-sm-12 text-center">
        
        <!-- SLIDER CON LOS AUTOBUSES -->
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-sm-6">
                  <img src="" alt="automovile">
                </div>
                <div class="col-sm-6">
                  <strong>This is another element</strong>
                  <img class="d-block w-100" src="..." alt="First slide">
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="..." alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="..." alt="Third slide">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="agency" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/agency2.jpg')">
  <div class="title">Viajes a tu medida</div>
  <div class="subtitle">Planear un viaje es dificil, nosotros lo hacemos por ti</div>
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