

function ContenedorBanner(array){
    var contenido =
            '<li>'+
                '<img src="'+array.imagen+'" alt="home-slide-one">'+
                '<div class="container transparent rounded jose">'+
                    '<div class="row ">'+
                        '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">'+
                            '<div class="caption-wrapper">'+
                                '<div class="slide-caption">'+
                                    '<a href="#">'+
                                        '<h2>'+array.titulo+'</h2>'+
                                    '</a>'+
                                    '<p>'+array.subTitulo+'</p>'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                    '</div>'+
                    '<div class="slider-button-wrapper">'+
                        '<a class="btn btn-primary btn-lg icou-button wow fadeInUp animated" href="'+array.urlBoton1+'"'+
                            'data-wow-duration="1s">'+array.nomvreBoton1+'</a>'+
                        '<a class="btn btn-lg icou-button icou-button--white-outline wow fadeInUp animated"'+
                            'href="'+array.urlBoton2+'" data-wow-duration="1.2s">'+array.nomvreBoton2+'</a>'+
                    '</div>'+
                '</div>'+
            '</li>';
    return contenido;
    
}
function hola(){
    console.log('222');
}
function arrayContenedorBanner(){
    var array = [
        {
            "imagen":"assets/img/carrusel/sex-shop-sexy-diversion1.jpg",
            "titulo":"Sex Shop Sexy Diversi&oacute;n",
            "subTitulo":"Sex Shop con los mejores precios.",
            "nomvreBoton1":"Todos los Productos",
            "urlBoton1":"about.html",
            "nomvreBoton2":"Pedidos",
            "urlBoton2":"#map"
        },
        {
            "imagen":"assets/img/carrusel/sex-shop-sexy-diversion2.jpg",
            "titulo":"Env&iacute;os a toda la Rep&uacute;blica Mexicana",
            "subTitulo":"Conoce nuestras formas de pago.",
            "nomvreBoton1":"Todos los Productos",
            "urlBoton1":"about.html",
            "nomvreBoton2":"Pedidos",
            "urlBoton2":"#map"
        },
        {
            "imagen":"assets/img/carrusel/sex-shop-sexy-diversion3.jpg",
            "titulo":"Promoci&oacute;n del mes",
            "subTitulo":"En la compra de X productos te regalamos X cosa.",
            "nomvreBoton1":"Todos los Productos",
            "urlBoton1":"about.html",
            "nomvreBoton2":"Pedidos",
            "urlBoton2":"#map"  
        }
    ];
    return array;
}