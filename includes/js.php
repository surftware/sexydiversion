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
        $( "#post" ).click(function() {
            var cliente = getClienteHtml();
            $.ajax({
                url: "includes/validacion.php",
                type: "POST",
                data: {
                    email: cliente["email"], 
                    nombre: cliente["nombre"], 
                    telefono: cliente["telefono"],
                    direccion: cliente["direccion"]
                },
                success: function (alerta) { 
                    alerta = $.parseJSON(alerta);
                    Swal.fire(
                    alerta['acceso'],
                    alerta['mensaje'],
                    alerta['tipoAlerta']
                    )
                    if (alerta['acceso'] === "success") {
                        document.getElementById("myForm").reset();    
                    }
                            
                }
            });
        });
        function index() {
        cliente = getClienteHtml(); // pide los datos del cliente
        /*
        console.log(cliente);
        var telefono = !(/^\d{10}$/.test(cliente["telefono"])); // valida el campo
        var patron = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/; // combierte el campo correo a un patron
        var correo = cliente["email"];
        
        correo = correo.search(patron); // valida el correo electronico
        console.log(correo);
        console.log(cliente["nombre"]);
        console.log(telefono);
        var acceso = false;
        */
            
    }
    function getClienteHtml() {

        var cliente = {
            "email":            document.getElementById("correo").value,
            "nombre":           document.getElementById("nombre").value,
            "telefono":         document.getElementById("telefono").value,
            "direccion":        document.getElementById("direccion").value,      
            "exampleTextarea":  document.getElementById("exampleTextarea").value         
        };
        return cliente;
    }
    function validaNumericos(event) {
        if(event.charCode >= 48 && event.charCode <= 57){
            return true;
        }
        return false;        
    }
    </script>