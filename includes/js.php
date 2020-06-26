<!-- Plugin JS -->
<script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/featherlight/featherlight.js" charset="utf-8"></script>
    <script src="js/featherlight/featherlight.gallery.js" charset="utf-8"></script>
    <script src="js/sticky/jquery.sticky.js"></script>
    <script src="js/slick/slick.min.js"></script>
    <script src="js/isotope/isotope.pkgd.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBL6gbhsnCEt4FS9D6BBl3mZO1xy-NcwpE"></script>
    <script src="js/map-helper.js"></script>
    <script src="js/superslide/jquery.superslides.js"></script>
    <script src="js/wow/wow.min.js"></script>   
    <!--<script src='https://www.google.com/recaptcha/api.js?hl=es'></script>-->
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <!--<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>-->
    <script src="includes/sweetalert2.js"></script>
    <!-- Custom JS -->
    <script src="js/main.js"></script>
    <script>

    $(document).ready(function () {
        $('#slides').superslides({
                animation: "fade",
                play: 10000,
                slide_easing: 'easeInOutCubic',
                slide_speed: 800,
                pagination: true,
                hashchange: false,
                scrollable: true
        });
    });

    $( "#post" ).click(function() {

            var form = $('form')[0]; // You need to use standard javascript object here
            var formData = new FormData(form);
            formData.append('captcha',grecaptcha.getResponse());
            //https://stackoverflow.com/questions/21044798/how-to-use-formdata-for-ajax-file-upload

            $.ajax({
                url: "includes/validacion.php",
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function (alerta) { 
                    
                    alerta = $.parseJSON(alerta);
                    console.log(alerta);
                    Swal.fire(
                    alerta['acceso'],
                    alerta['mensaje'],
                    alerta['tipoAlerta']
                    )
                    if (alerta['tipoAlerta'] === "success") {
                        document.getElementById("myForm").reset();    
                    }
                    //document.getElementById("myForm").reset();   
                    $submitButton = document.getElementById("post").value;
                    //$submitButton.val( $submitButton.data('loading-text') ? $submitButton.data('loading-text') : 'Loading...' ).attr('disabled', true);                     
                }
            });
            
        });

    //$(".token").data('token');
    function validaNumericos(event) {
        if(event.charCode >= 48 && event.charCode <= 57){
            return true;
        }
        return false;        
    }

    function validarArchivo(obj){
    var uploadFile = obj.files[0];
    var inputImage;

        if (!window.FileReader) {
            //alert('El navegador no soporta la lectura de archivos');
            Swal.fire(
                    'Archivo Incorrecto!',
                    'El navegador no soporta la lectura de archivos',
                    'warning'
            ); 
            inputImage = document.getElementById("adjunto");
            inputImage.value = '';
            return;
        }

        if (!(/\.(jpg|jpeg|png|pdf|docx|doc|xlsx|xls)$/i).test(uploadFile.name)) {
            var alertMensaje='El archivo a adjuntar no es una imagen o archivo <br>'+
            'Los formatos apropiados son:<br/>'+
            '-jpg\n'+
            '-jpeg\n'+
            '-pdf\n'+
            '-docx\n'+
            '-doc\n'+
            '-xlsx\n'+
            '-xls'
            ;
            Swal.fire(
                    'Archivo Incorrecto!',
                    alertMensaje,
                    'warning'
            );  
            inputImage = document.getElementById("adjunto");
            inputImage.value = '';
        }
        else 
        {
            var img = new Image();
            img.onload = function () {
                
                if (uploadFile.size > 1536000)
                {   
                    //alert('El peso del archivo no puede exceder los 15360kb o 15mb');
                    Swal.fire(
                    'Archivo Incorrecto!',
                    'El peso del archivo no puede exceder los 15360kb o 15mb',
                    'warning'
                    );  

                    inputImage = document.getElementById("adjunto");
                    inputImage.value = '';
                }
                else {
                    //alert('Archivo correcta :)');   
                    Swal.fire(
                    'Archivo Correcto!',
                    'El archivo es valido para enviarse',
                    'success'
                    );             
                }
            };
            img.src = URL.createObjectURL(uploadFile);
        }                 
    }
    </script>