
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" prefix="og: http://ogp.me/ns#"> <!--<![endif]-->
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="keywords" content="cuidado ambiental, naturaleza, medio ambiente, juntos por el medio ambiente, reciclaje, preservacion ambiental" />
    <meta name="Orange 360" content="" />


    <meta property="fb:admins" content="100008217768429" />
    <title>Escuela de Excelencia en Prevención de Cáncer</title>
    <meta name="description" content="" />

    <link rel="shortcut icon" type="images/x-icon" href="https://www.ligacancer.org.pe/favicon.ico" />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    @include('partials.head_template')

    </head>
    <body>
        <div id="fh5co-wrapper">
        <div id="fh5co-page">
         @include('partials.menu')

         @yield('content')

         @include('partials.footer')

         </div>
        <!-- END fh5co-page -->
    </div>
    <!-- END fh5co-wrapper -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="{{url('centro')}}/js/jquery.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Custom JavaScript -->
    <script src="{{url('centro')}}/js/animate.js"></script>
    <script src="{{url('centro')}}/js/custom.js"></script>
    <script src="{{url('centro')}}/js/custom-file-input.js"></script>
    <script src="{{url('centro')}}/js/main_principal.js"></script>
    <script src="https://anijs.github.io/lib/anijs/anijs-min.js"></script>
     <script src='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js'></script>

    <script src="{{url('centro')}}/js/jquery.mask.min.js"></script>



    <link rel="stylesheet" href="{{url('centro')}}/css/parsley.css">
    <script src="{{url('centro')}}/js/parsley.min.js"></script>
    <script src="{{url('centro')}}/js/i18n/es.js"></script>

  <!-- Include to use $addClass, $toggleClass or $removeClass -->

<script>



   if ($(window).width() < 960) {
      $('#img2').css('src', 'imagenes/Logotipo.png');
    }
      $('#blogCarousel').carousel({
        interval: 5000
    });

$('.carousel').carousel({
  interval: 2000
})

window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}



</script>
<script>
  AOS.init();
</script>

@yield('javascript')
    </body>
</html>

