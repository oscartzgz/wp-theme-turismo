    <footer id="footer">
      <div class="container">
        <div class="row">

          <div class="col-lg-12 text-center fb-link-col">

            <a href="https://www.facebook.com/benittur" class="facebook-link" target="_blank">
              <img src="<?php echo get_template_directory_uri() ?>/img/icon_fb_64x64.png" alt="facebook icon">
              BENITTUR en Facebook
            </a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 text-center">
          <div>
            <a href="tel:01-800-849-1438" class="phone-number">
              <i class="material-icons sm-32 md-48">phone</i> 01 800 849 1438
            </a>
          </div>
        </div>

        <div class="col-lg-12 text-center">
          <a href="https://wa.me/+525580214837?text=Hola%20me%20gustaría%20mas%20información%20sobre%20los%20viajes" class="whatsapp-number">
            <img src="<?php echo get_template_directory_uri() ?>/img/icon_whatsapp_64x64.png" alt="whatsapp_icon"> 55 80 21 4837
          </a>
        </div>

      </div>
      <div class="text-center copyright-container">
        <span>Copyright © 2019 - Promotora Turística Vagabundo S.A. de C.V.</span>
      </div>
    </footer>
    
    <?php wp_footer(); ?>


    <!-- Modal -->
    <div class="modal fade" id="sendEmailModal" tabindex="-1" role="dialog" aria-labelledby="sendEmailModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Solicitar Cotización</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <form id="quotationForm" action="/" method="post" >

              <div class="row">

                <div class="col-md-12">
                
                  <div class="form-group">
                    <label for="formName">Nombre</label>
                    <input type="text" id="formName" name="name" class="form-control" required >
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="formPhone">Telefono</label>
                    <input type="phone" id="formPhone" name="phone" class="form-control" required >
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="formEmail">Email</label>
                    <input type="email" name="email" class="form-control" required>
                  </div>
                </div>


              
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="formUnit">Unidad</label>
                    <select id="formUnit" name="unit" class="form-control" required >
                      <option value="IRIZAR i8">IRIZAR i8 (47)</option>
                      <option value="IRIZAR PB">IRIZAR PB (47)</option>
                      <option value="IRIZAR NC">IRIZAR NC (47)</option>
                      <option value="SPRINTER Capacidad 17">SPRINTER (17)</option>
                      <option value="SPRINTER Capacidad 20">SPRINTER (20)</option>
                      <option value="HIACE">HICAE (13)</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-4">
                  
                  <div class="form-group">
                    <label for="formStartDate">Fecha salida</label>
                    <input type="date" id="formStartDate" name="start_date" class="form-control" required >
                  </div>
                </div>
                <div class="col-md-4">
                  
                  <div class="form-group">
                    <label for="formEndDate">Fecha llegada</label>
                    <input type="date" id="formEndDate" name="end_date" class="form-control" required >
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-12 text-center">
                  <span class="error d-none"></span>
                  <span class="success d-none"></span>
                </div>
                <div class="col-12">
                  <button id="sendEmailButton" type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Solicitar Cotización</button>
                </div>
              </div>
            </form>
          </div>
          <!-- <div class="modal-footer"> -->
            <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          <!-- </div> -->
        </div>
      </div>
    </div>

  </body>
</html>