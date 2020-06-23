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
    <script src='https://www.google.com/recaptcha/api.js?hl=es'></script>

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
            //index();
        });
        //var token = $(".token").data('token');
        $( "#post" ).click(function() {
            var cliente = getClienteHtml();
            $.ajax({
                url: "includes/validacion.php",
                type: "POST",
                data: {
                    recaptcha: cliente["rcaptcha"],
                    nombre: cliente["nombre"], 
                    telefono: cliente["telefono"],
                    direccion: cliente["direccion"],
                    mensaje: cliente["mensaje"],
                    correo: cliente["email"], 

                    


                },
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
        function index() {
        cliente = getClienteHtml(); // pide los datos del cliente
    }
    function getClienteHtml() {

        var cliente = {
            "email":            document.getElementById("correo").value,
            "nombre":           document.getElementById("nombre").value,
            "telefono":         document.getElementById("telefono").value,
            "direccion":        document.getElementById("direccion").value,      
            "mensaje":          document.getElementById("exampleTextarea").value
            // "rcaptcha":        $(".sitekey").data('sitekey')
            //"rcaptcha":        "6LdJ96UZAAAAAHApVOUIMpA1WXKKJ7NA4ubMZPWt"

            
        };
        return cliente;
    }
    //$(".token").data('token');
    function validaNumericos(event) {
        if(event.charCode >= 48 && event.charCode <= 57){
            return true;
        }
        return false;        
    }
    </script>