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


<section id="travelTypes">
  <div class="title">
    Tu propio viaje
  </div>
  <div class="subtitle">
    ¿Ya tienes a donde ir? Estamos a tu disposición
  </div>

  <div class="content">
    <div class="item">
      <img src="<?php echo get_template_directory_uri() ?>/img/service-item.jpg" alt="">
      <div class="name">Turisticos</div>
      <div class="resume">
        Para tus viajes de excursiones y familiares
      </div>
    </div>
    <div class="item">
      <img src="<?php echo get_template_directory_uri() ?>/img/service-item.jpg" alt="">
      <div class="name">Escolares y Culturales</div>
      <div class="resume">
        Contamos con todas las características y requisitos requeridos para tu seguridad en el viaje
      </div>
    </div>
    <div class="item">
      <img src="<?php echo get_template_directory_uri() ?>/img/service-item.jpg" alt="">
      <div class="name">Religiosos</div>
      <div class="resume">
        Te llevamos a conocer lugares de devoción y de peregrinaje
      </div>
    </div>

    <div class="item">
      <img src="<?php echo get_template_directory_uri() ?>/img/service-item.jpg" alt="">
      <div class="name">Eventos Especiales</div>
      <div class="resume">
        Políticos, deportivos, artisticos, no te pierdas de tus eventos favoritos
      </div>
    </div>
    <div class="item">
      <img src="<?php echo get_template_directory_uri() ?>/img/service-item.jpg" alt="">
      <div class="name">Negocios</div>
      <div class="resume">
        La mejor opción para transporte y logística a congresos, meetings y eventos recreativos
      </div>
    </div>
    <div class="item">
      <img src="<?php echo get_template_directory_uri() ?>/img/service-item.jpg" alt="">
      <div class="name">Descanso y de Placer</div>
      <div class="resume">
        Disfruta de unas excelentes vacaciones a cualquier parte de la república mexicana
      </div>
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
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#diagramModal1">
                        Diagrama
                      </button>

                      <!-- <span class="button" data-toggle="modal" data-target="#diagramModal1">Ver Diagrama</span> -->
          
                      <!-- Modal -->
                      <div class="modal fade" id="diagramModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle">Ver Diagrama</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <img src="<?php echo get_template_directory_uri() ?>/img/i8.png" alt="" width="100%">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      
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
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#diagramModal2">
                        Diagrama
                      </button>

                      <!-- <span class="button" data-toggle="modal" data-target="#diagramModal1">Ver Diagrama</span> -->
          
                      <!-- Modal -->
                      <div class="modal fade" id="diagramModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle">Ver Diagrama</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <img src="<?php echo get_template_directory_uri() ?>/img/PB.png" alt="" width="100%">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            </div>
                          </div>
                        </div>
                      </div>
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
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#diagramModal3">
                        Diagrama
                      </button>

                      <!-- <span class="button" data-toggle="modal" data-target="#diagramModal1">Ver Diagrama</span> -->
          
                      <!-- Modal -->
                      <div class="modal fade" id="diagramModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle">Ver Diagrama</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <img src="<?php echo get_template_directory_uri() ?>/img/NC.png" alt="" width="100%">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            </div>
                          </div>
                        </div>
                      </div>
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
                         <li><i class="material-icons">grade</i> Capacidad <strong>17</strong> y <strong>20</strong> personas</li>
                        <li><i class="material-icons">grade</i> Asientos reclinables</li>
                        <li><i class="material-icons">grade</i> 2 pantallas de plasma</li>
                        <li><i class="material-icons">grade</i> Aire Acondicionado</li>
                        <li><i class="material-icons">grade</i> Cajuela para equipaje</li>
                        <li><i class="material-icons">grade</i> Micrófono para guía</li>  
                        <li><i class="material-icons">grade</i> Audio y video</li>
                      </ul>
                    </div>
                    <div class="footer text-center">
                      
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#diagramModal4" style="display: inline-block;">
                        Diag. 17
                      </button>

                      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#diagramModal5" style="display: inline-block;">
                        Diag. 20
                      </button>

                      <!-- <span class="button" data-toggle="modal" data-target="#diagramModal1">Ver Diagrama</span> -->
          
                      <!-- Modal -->
                      <div class="modal fade" id="diagramModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle">Ver Diagrama</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <img src="<?php echo get_template_directory_uri() ?>/img/sprinter_17.png" alt="" width="100%">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Modal -->
                      <div class="modal fade" id="diagramModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle">Ver Diagrama</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <img src="<?php echo get_template_directory_uri() ?>/img/sprinter_20.png" alt="" width="100%">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            </div>
                          </div>
                        </div>
                      </div>

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

                      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#diagramModal6" style="display: inline-block;">
                        Diagrama
                      </button>

                      <!-- <span class="button" data-toggle="modal" data-target="#diagramModal1">Ver Diagrama</span> -->
          
                      <!-- Modal -->
                      <div class="modal fade" id="diagramModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle">Ver Diagrama</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <img src="<?php echo get_template_directory_uri() ?>/img/hiace.png" alt="" width="100%">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
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