function showErrorForm(form) {
  jQuery(form).find('.error').html("Por favor llena todos los campos.")
  jQuery(form).find('.error').removeClass('d-none');
  jQuery(form).find('.success').addClass('d-none');
}

function showSuccessForm(form) {
  jQuery(form).find('.success').html("Tu mensaje fue enviado con éxito. ¡Pronto nos pondremos en contacto contigo!")
  jQuery(form).find('.error').addClass('d-none');
  jQuery(form).find('.success').removeClass('d-none');
}

function validateForm(form) {
  valid = true
  jQuery(form).find('input').each(function() {
    console.log(jQuery(this).val())
    if(jQuery(this).val() == "" || jQuery(this).length == 0 ) {
      console.log('REGISTRO MALOOOOO')
      valid = false;
    }
  });

  return valid;
}


jQuery(document).ready(function(){


  jQuery('#sendEmailButton').on('click', function(evt){
    evt.preventDefault();

    validForm = validateForm(jQuery('#quotationForm'));
    console.log(validForm);
    if (!validForm) {
      showErrorForm(jQuery('#quotationForm'));
    } else {

      start_date = new Date(jQuery('#quotationForm input[name="start_date"]').val())
      end_date = new Date(jQuery('#quotationForm input[name="end_date"]').val())

      f_start_date = `${start_date.getDate()}/${start_date.getMonth()}/${start_date.getFullYear()}`;
      f_end_date = `${end_date.getDate()}/${end_date.getMonth()}/${end_date.getFullYear()}`;

      message = `
      <!-- Emails use the XHTML Strict doctype -->
      <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
      <html xmlns="http://www.w3.org/1999/xhtml">
      <head>
        <!-- The character set should be utf-8 -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width"/>
        <!-- Link to the email's CSS, which will be inlined into the email -->
        <link rel="stylesheet" href="assets/css/foundation-emails.css">
        <style>
          <!-- Your CSS to inline should be added here -->
        </style>
      </head>

      <body>
        <!-- Wrapper for the body of the email -->
        <table class="body" data-made-with-foundation>
          <tr>
            <!-- The class, align, and <center> tag center the container -->
            <td class="float-center" align="center" valign="top">
              <br/>

              <center>
              

                <table class="container">
                  <tr>
                    <td>
                      
                      <table class="row">
                        <tr>
                          <th>
                            ${jQuery('#quotationForm input[name="name"]').val()}
                          </th>
                        </tr>
                      </table>

                      <table class="row">
                        <tr>
                          <th>
                            ${jQuery('#quotationForm input[name="email"]').val()}
                          </th>
                        </tr>
                      </table>

                      <table class="row">
                        <tr>
                          <th>
                            ${jQuery('#quotationForm input[name="phone"]').val()}
                          </th>
                        </tr>
                      </table>


                      <table class="row">
                        <tr>
                          <th>
                            Esta persona tiene interes por la unidad <strong>${jQuery('#quotationForm *[name="unit"]').val()}</strong> con fecha de salida <strong>${f_start_date}</strong> y fecha de llegada <strong>${f_end_date}</strong>
                          </th>
                        </tr>
                      </table>


                    </td>
                  </tr>
                </table>

              </center>

              <small><i>Este correo fue enviado desde el sitio web benittur.com.mx</i></small>
            </td>
          </tr>
        </table>
      </body>
      </html>
      `;

      Email.send({
        SecureToken : "4c081548-d011-4da7-87ca-40cf01737804",
        To : 'benittur@gmail.com',
        From : "contacto@benittur.com.mx",
        Subject : "Cotización viaje",
        Body : message
      }).then(
        // message => alert(message)
        function(){
          showSuccessForm(jQuery('#quotationForm'));
          jQuery('#sendEmailButton').attr('disabled', true);

        }
      );
    }

  });

});