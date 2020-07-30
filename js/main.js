(function ($) {
  'use strict';


$(document).ready(function() {
  
    initLightbox();
    initAnimation();
    initStickyNav();
    initPortfolioFilter();
    initMainMenu();
    initScrollTop();
    initSliders();
    initQtySelect();

		// Parallax disabled for mobile screens
		if ($(window).width() >= 992) {

      initParallax();
      
		}

});

$(window).on('load', function() {
  
    $('.preloader img').fadeOut();
    $('.preloader').delay(350).fadeOut('slow', function() {
  
    });
  
});


/* ---------------------------------------------------------------------- */
/*  WOW Animation
/* ---------------------------------------------------------------------- */


function initAnimation () {
  
  new WOW().init();

} // initAnimation


/* ---------------------------------------------------------------------- */
/*  Lightbox
/* ---------------------------------------------------------------------- */


function initLightbox() {

  $('.gallery').featherlightGallery({

    gallery: {
      fadeIn: 300,
      fadeOut: 300
    },
    openSpeed: 300,
    closeSpeed: 300

  });

  $('.gallery2').featherlightGallery({

    gallery: {
      next: 'next Â»',
      previous: 'Â« previous'
    },
    variant: 'featherlight-gallery2'

  });

} //initLightbox



/*---------------------------------------
  Sticky Navbar
-----------------------------------------*/


function initStickyNav() {

  $('.sticky').sticky({

    zIndex: '100001',

  });

  $('.sticky').on('sticky-start', function () {

    $(this).addClass('sticky-nav');
    $('.main-menu-wrapper-outer').css('background', '#613d7c');

  });

  $('.sticky').on('sticky-end', function () {

    $('.mainmeu-area').css('opacity', '1.0');
    $('.main-menu-wrapper-outer').css('opacity', '1.0');
    $('.main-menu-wrapper-outer').css('background', 'transparent');

  });

} // initSticky


/*---------------------------------------
  Portfolio Filter
-----------------------------------------*/


function initPortfolioFilter() {

  var $grid = $('.grid').isotope({

    itemSelector: '.element-item',
    layoutMode: 'fitRows',

    getSortData: {
      name: '.name',
      symbol: '.symbol',
      number: '.number parseInt',
      category: '[data-category]',
      
      weight: function (itemElem) {

        var weight = $(itemElem).find('.weight').text();
        return parseFloat(weight.replace(/[\(\)]/g, ''));

      }
    }

  });


// filter functions
var filterFns = {

  // show if number is greater than 50
  numberGreaterThan50: function () {

    var number = $(this).find('.number').text();
    return parseInt(number, 10) > 50;

  },
  // show if name ends with -ium
  ium: function () {

    var name = $(this).find('.name').text();
    return name.match(/ium$/);

  }
  
};

  // bind filter button click
  $('#filters').on('click', 'li', function () {

    var filterValue = $(this).attr('data-filter');
    // use filterFn if matches value
    filterValue = filterFns[filterValue] || filterValue;

    $grid.isotope({

      filter: filterValue

    });

    $('li.active').removeClass('active');
    $(this).addClass('active');

  });

// bind sort button click
$('#sorts').on('click', 'button', function () {

  var sortByValue = $(this).attr('data-sort-by');

  $grid.isotope({

    sortBy: sortByValue

  });

});

// change is-checked class on buttons
$('.button-group').each(function (i, buttonGroup) {

  var $buttonGroup = $(buttonGroup);

  $buttonGroup.on('click', 'button', function () {

    $buttonGroup.find('.is-checked').removeClass('is-checked');
    $(this).addClass('is-checked');

  });

});

} // initPortfolioFilter


/*---------------------------------------
  Parallax
-----------------------------------------*/


function initParallax() {

  $(window).on('scroll', function (e) {

    parallaxScroll();

  });

  function parallaxScroll() {

    var scrolledY = $(window).scrollTop();

    $('.parallax-scroll').css('background-position', 'center -' + ((scrolledY * 0.3)) + 'px');
    $('.parallax-scroll').css('width', '100% auto');

  }

  $(window).on('scroll', update);

  update();

  function update() {

    var scrolledY = $(window).scrollTop();
    $('.parallax-scroll').css('background-position', 'center -' + ((scrolledY * 0.3)) + 'px');
    $('.parallax-scroll').css('width', '100% auto');

  }

} // initParallax


/*---------------------------------------
  Main Menu Mobile
-----------------------------------------*/


function initMainMenu() {

  //Submenu Dropdown Toggle
  if ($('.main-menu li.dropdown ul').length) {

        $('.main-menu li.dropdown').append('<div class="dropdown-btn"></div>');

    //Dropdown Button
        $('.main-menu li.dropdown .dropdown-btn').on('click', function () {
        $(this).prev('ul').slideToggle(300);
        $('.main-menu li.dropdown').toggleClass("active");
        $(this).closest('.dropdown-btn').toggleClass("down");
    });

  }

} // initMainMenu


/*---------------------------------------
  Product QTY Select
-----------------------------------------*/


function initQtySelect() {

  $('.qty-input').on('click', '.plus', function (e) {

    e.preventDefault();

    var n = $(this).parent().siblings('input').val();

    $(this).parent().siblings('input').val(parseInt($(this).parent().siblings('input').val(), 10) + 1)

  });

  $('.qty-input').on('click', '.minus', function (e) {

    e.preventDefault();

    var n = $(this).parent().siblings('input').val();

    if (n >= 2) {

      $(this).parent().siblings('input').val(parseInt($(this).parent().siblings('input').val(), 10) - 1)
    
    } else {

    }

  });

} // initQtySelect


/*---------------------------------------
  Sliders 
-----------------------------------------*/


function initSliders() {

//  Testimonial

$('.testimonial-slides').slick({
  infinite: true,
  centerMode: false,
  dots: true,
  centerPadding: '0',
  slidesToShow: 3,
  appendArrows: false,
  slidesToScroll: 1,
  appendDots: $('.testimonial-dots'),
  autoplay: true,
  speed: 300,
    responsive: [{
      breakpoint: 1200,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    ]
});

//  Team Section Carousel Homepage

$('.team-slides').slick({
  slidesToShow: 4,
  dots: true,
  arrows: true,
  centerMode: true,
  centerPadding: '5px',
  appendArrows: $('.team-container'),
  appendDots: $('.team-dots'),
  autoplay: false,
  speed: 300,
    responsive: [{
      breakpoint: 1200,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    ]
});


//  Portfolio Single Carousel

$('.portfolio-image-holder').slick({
  slidesToShow: 1,
  dots: true,
  arrows: true,
  centerMode: true,
  centerPadding: '0',
  appendArrows: $('.portfolio-single-image-wrapper'),
  appendDots: $('.portfolio-single-dots'),
  autoplay: false,
  speed: 600,
    responsive: [{
      breakpoint: 1200,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    ]
});

  // Shop Single Image

  $('.shop-item-image-wrapper').slick({
    slidesToShow: 1,
    arrows: true,
    centerMode: true,
    centerPadding: '0',
    appendArrows: $('.shop-item-image-wrapper'),
    autoplay: false,
    speed: 300,
      responsive: [{
        breakpoint: 1200,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      ]
  });

} // initSliders

/*---------------------------------------
  Scrollup
-----------------------------------------*/
//  Surftware (colaboradores): 

//  -José Armando Moreno Tolentino.
//  -Juan Miguel Díaz Teran.


function initScrollTop() {
  $(window).on("scroll", function () {

    if ($(this).scrollTop() > 100) {

      $('.scrollup').fadeIn();

    } else {

      $('.scrollup').fadeOut();

    }

  });

  $('.scrollup').on('click', function () {

    $('html, body').animate({ scrollTop: 0 }, 800);

    return false;

  });

} // initScrollTop


})(jQuery);

// formulario de contacto 
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
              $submitButton = document.getElementById("post").value;
          }
      });
      
  });

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
      Swal.fire(
              'Archivo Incorrecto!',
              'El navegador no soporta la lectura de archivos',
              'warning'
      ); 
      inputImage.value = '';
      return;
      inputImage = document.getElementById("adjunto");
  }
  if (!(/\.(jpg|jpeg|png|pdf|docx|doc|xlsx|xls)$/i).test(uploadFile.name)) {
      var alertMensaje='El archivo a adjuntar no es una imagen o archivo <br>'+
      'Los formatos apropiados son:<br/>'+
      '-jpg\n'+
      '-jpeg\n'+
      '-png\n'+
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
              Swal.fire(
              'Archivo Incorrecto!',
              'El peso del archivo no puede exceder los 15360kb o 15mb',
              'warning'
              );  
              inputImage = document.getElementById("adjunto");
              inputImage.value = '';
          }
          else {
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