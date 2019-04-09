@extends('layouts.principal')
@section('content')
<!--   @import url('https://fonts.googleapis.com/css?family=Montserrat|Oswald');-->
    <style type="text/css">

        body {
            margin: 0;
            padding: 0;
            font-family: 'Rubik', sans-serif;
        }

        h1 {
            font-family: 'Rubik', sans-serif;
        }

        p {
            font-family: 'Rubik', sans-serif;
        }

        .image-wrap {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow-x: hidden;
        }

        .banner-content {
            position: absolute;
            z-index: 99999;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80%;
            text-align: center;
            font-size: 1.5em;
            color: #fff;
            line-height: 1.5;
        }

        .img-content img {
            width: 100%;
            height: 100vh;
            display: block;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            background: #530473;
            opacity: .8;
            z-index: 999;
            height: 100%;
        }

        .ban-btn {
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 4px;
        }

        .btn-red {
            background-color: red;
        }

        .btn-green {
            background-color: #4CAF50;
        }

        .cambiar{
            background-image:  url('{{ url('centro')}}/imagenes/img2/Imagen-3.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

         .cambiar img{
                width: 350px;
                 height: 350px
            }
        @media screen and (max-width: 425px) {
            .cambiar {background-image:  url('{{ url('centro')}}/imagenes/fondo-rojo.png');}

             .cambiar img{
                 width: 300px;
                 height: 350px
            }
        }

        @media screen and (max-width: 375px) {
           .cambiar {background-image:  url('{{ url('centro')}}/imagenes/fondo-rojo.png');
            }

            .cambiar img{
                 width: 300px;
                 height: 350px
            }
        }

        @media screen and (max-width: 320px) {
          .cambiar {background-image:  url('{{ url('centro')}}/imagenes/fondo-rojo.png');}
        }

      /*card*/
      .card {
        margin: 0 auto;
      }
      .card .carousel-item {
        height: 350px;
      }


      .card .carousel-caption {
        padding: 0;
        right: 0;
        left: 0;
        color: #3d3d3d;
      }
      .card .carousel-caption h3 {
        color: #3d3d3d;
      }
      .card .carousel-caption p {
        line-height: 30px;
      }
      .card .carousel-caption .col-sm-3 {
        display: flex;
        align-items: center;
      }
      .card .carousel-caption .col-sm-9 {
        text-align: left;
      }
      .navi a {
          text-decoration:none;
      }
      a > .ico {8e
          background-color: grey;
          padding: 10px;

      }
      a:hover > .ico {
          background-color: #666;
      }

      @media screen and (max-device-width : 480px) {
         .card .carousel-item {
        height: 400px;
      }

      .smallColor{
        color:white;
      }


    </style>


<div id="carouselExampleIndicators" class="carousel slide" data-aos="fade-right" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
  <!--  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li> -->
  </ol>
  <div class="carousel-inner">
    <div class=" active">

      <div style="position: relative;" style="background-image: url({{ url('centro')}}/imagenes/Slides-3.png);">
            <div class="d-inline d-sm-none" style="position: absolute; left: 35%; top: 330px;"><a href="{{ route('inscripcion.index') }}" > <button type="button" class="btn btn-primary" style="background: white; border: 0px; color:red;">Inscríbete Aquí</button> </a></div>

            <div class="d-none d-sm-inline d-md-none" style="position: absolute; left: 70%; top: 400px;"><a href="{{ route('inscripcion.index') }}" > <button class="button">
              <span>Inscríbete Aquí</span>
            </button></a></div>

            <div class="d-none d-md-inline d-lg-none " style="position: absolute; left: 70%; top: 400px;"><a href="{{ route('inscripcion.index') }}" > <button class="button">
              <span>Inscríbete Aquí</span>
            </button></a></div>

            <div class="d-none d-lg-inline d-xl-none" style="position: absolute; left: 70%; top: 400px;"><a href="{{ route('inscripcion.index') }}" > <button class="button">
              <span>Inscríbete Aquí</span>
            </button></a></div>

            <div class="d-none d-xl-inline" style="position: absolute; left: 70%; top: 450px;"><a href="{{ route('inscripcion.index') }}" > <button type="button" class="btn btn-primary" style="background: white; border: 0px; color:red; padding: 20px">Inscríbete Aquí</button> </a></div>
       </div>

      <div >
        <img  id='portada' class=" d-inline d-sm-none mobile-only" src="{{ url('centro')}}/imagenes/Slides-sm-final.png" style="width: 410px;" alt="First slide">
      </div>

      <img class="d-none d-sm-inline d-md-none" src="{{ url('centro')}}/imagenes/Slides-xl-final.png" style="width: 300px;" alt="First slide">
      <img class="d-none d-md-inline d-lg-none " src="{{ url('centro')}}/imagenes/Slides-xl-final.png" alt="First slide">
      <img class="d-none d-lg-inline d-xl-none" src="{{ url('centro')}}/imagenes/Slides-xl-final.png" alt="First slide">
      <img class="d-none d-xl-inline" src="{{ url('centro')}}/imagenes/Slides-xl-final.png" alt="First slide">
    </div>


   <!--  <div class="carousel-item" >
      <div style="position: relative;">
            <div style="position: absolute; left: 70%; top: 400px;"> <img src="{ { url('centro')}}/imagenes/Slider-Final-2.png" > </div>
      </div>
      <img class="d-block w-100" src="{ { url('centro')}}/imagenes/Slider-Final-1.png" alt="Second slide">

    </div>  -->

  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<section id="porta">
 <div class="container-fluid">
    <div class="row cambiar" style="height: 470px;">


       <div class="col-sm-6 offset-md-6 ">
        <br>
        <div data-aos="fade-up"
      data-aos-duration="300" class="container d-flex justify-content-center">

          <img src="{{ url('centro')}}/imagenes/img2/Fecha_Curso.png" >
        </div>

      </div>

    </div>

  </div>



</section>



<section class="card col-md-12 " style="background:url('{{ url('centro') }}/imagenes/imagen-1.png'); background-size: cover;
                  background-repeat: no-repeat;
                  background-position: center;" >
  <div id="carouselExampleControls" class="carousel slide " data-ride="carousel" data-interval="10000">
    <div class="w-100 carousel-inner " role="listbox" >

    <div class="carousel-item active" >
        <div class="carousel-caption">
              <br>
              <div data-aos="fade-up"
     data-aos-duration="500" class="row d-flex justify-content-center">
                <div class="col-xs-12 ">
                     <img src="{{ url('centro') }}/imagenes/directivos/Dr. José Jerónimo Guibovich.png" style="width: 200px; height: 200px;" alt="" class="img-responsive rounded-circle img-fluid"/>
                     <h3 style="color:white">Dr. José Jerónimo Guibovich </h3><br>
                     <h5 style="color:white">Director de Asuntos Internacionales </h5>
                     <small style="color:white;">Liga Contra el Cáncer</small>

                </div>

              </div>
        </div>
      </div>
      <div class="carousel-item " >
        <div class="carousel-caption">
              <br>
              <div class="row d-flex justify-content-center">
                <div class="col-xs-12 ">
                     <img src="{{ url('centro') }}/imagenes/directivos/Dr.-Velarde-Galdos,-Rafael.png" style="width: 200px; height: 200px;" alt="" class="img-responsive rounded-circle img-fluid"/>
                     <h3 style="color:white">Dr. Raúl Velarde Galdós </h3><br>
                     <h5 style="color:white">Director Médico </h5>
                     <small style="color:white;">Liga Contra el Cáncer</small>

                </div>

              </div>
        </div>
      </div>
      <div class="carousel-item">
       <div class="carousel-caption">
              <br>
              <div class="row d-flex justify-content-center">
                <div class="col-xs-12 ">
                     <img src="{{ url('centro') }}/imagenes/directivos/Lic.-Lopez-Ampuero,-Catya-Luz.png" style="width: 200px; height: 200px;" alt="" class="img-responsive rounded-circle img-fluid"/>
                     <h3 style="color:white">Lic. Catya López Ampuero </h3><br>
                     <h5 style="color:white">Coordinadora de Educación</h5>
                     <small style="color:white;">Liga Contra el Cáncer</small>

                </div>

              </div>

        </div>
      </div>

    </div>
    <div class="float-right navi">
    <a class="" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon ico" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon ico" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    </div>
  </div>
</section>


@endsection

@section('javascript')

  <script type="text/javascript">
   // A Testimonials slider for a
// friend's (fb.com/computer.doctor.xanthi/)
// website i am developing

// Made with awesome -> Owl Carousel 2:
// https://github.com/OwlCarousel2/OwlCarousel2
jQuery(document).ready(function($) {
              $('.fadeOut').owlCarousel({
                items: 1,
                animateOut: 'fadeOut',
                loop: true,
                margin: 10,
              });
              $('.custom1').owlCarousel({
                animateOut: 'slideOutDown',
                animateIn: 'flipInX',
                items: 1,
                margin: 30,
                stagePadding: 30,
                smartSpeed: 450,
                navigation : true,
                slideSpeed : 300,
                singleItem: true,
                autoPlay : true,
                stopOnHover : true,
              });
            });
  </script>
@endsection