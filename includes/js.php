pt>
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
                contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
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
    </script>