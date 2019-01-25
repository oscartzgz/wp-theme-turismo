<?php get_header(); ?>

<section id="welcome">
  <div id="home-video"></div>
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
      <img src="<?php echo get_template_directory_uri() ?>/img/travel1.jpeg" alt="travel_image">
    </div>
    <div class="item">
      <img src="<?php echo get_template_directory_uri() ?>/img/travel1.jpeg" alt="travel_image">
    </div>
    <div class="item">
      <img src="<?php echo get_template_directory_uri() ?>/img/travel1.jpeg" alt="travel_image">
    </div>

    <div class="item">
      <img src="<?php echo get_template_directory_uri() ?>/img/travel1.jpeg" alt="travel_image">
    </div>
    <div class="item">
      <img src="<?php echo get_template_directory_uri() ?>/img/travel1.jpeg" alt="travel_image">
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

<section id="agency">
  <div class="title">This is the cool Travel Agency</div>
  <div class="subtitle">We can make the better experience for you, call us!</div>
  <div class="content">
    Here we have the content for the agency section
  </div>
</section>

<?php get_footer(); ?>