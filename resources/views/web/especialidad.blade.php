@extends('layouts.principal')

@section('content')


<img class="d-inline d-sm-none" src="{{ url('centro')}}/imagenes/Slider/Celular/Slider-5.png"  style="width:430px; height: 400px; "alt="First slide">
      <img class="d-none d-sm-inline d-md-none" src="{{ url('centro')}}/imagenes/Slider/Celular/Slider-5.png" alt="First slide" style="width:90000px; height: 400px; ">
      <img class="d-none d-md-inline d-lg-none " src="{{ url('centro')}}/imagenes/Slider/Celular/Slider-5.png" alt="First slide" style="width:800px; height: 400px; ">
      <img class="d-none d-lg-inline d-xl-none" src="{{ url('centro')}}/imagenes/Slider/Web-Windows/Slider-5.png" alt="First slide">
      <img class="d-none d-xl-inline" data-aos="fade-down"
      data-aos-duration="700" src="{{ url('centro')}}/imagenes/Slider/Web-iMac/Slider-5.png" alt="First slide" style="width:1400px; height: 400px; ">
<br>

<style type="text/css">
 @import url(https://fonts.googleapis.com/css?family=Raleway:400,500,800);
figure.snip0078 {
  font-family: 'Rubik', Arial, sans-serif;
  color: #fff;
  position: relative;
  float: left;
  margin: 10px 1%;
  min-width: 220px;
  max-width: 310px;
  max-height: 310px;
  width: 100%;
  text-align: center;
}
figure.snip0078 * {
  -webkit-box-sizing: padding-box;
  box-sizing: padding-box;
}
figure.snip0078 img {
  opacity: 1;
  max-width: 100%;

  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  -webkit-transform: scale(0.85);
  transform: scale(0.85);
  -webkit-transform-origin: 0 0;
  transform-origin: 0 0;
}
figure.snip0078 figcaption {
  bottom: 0;
  width: 80%;
  right: 0;
  position: absolute;

  padding: 20px;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  -webkit-transform: translateY(0);
  transform: translateY(0);
  box-shadow: 0 0px 10px -10px #000000;
}
figure.snip0078 figcaption h2,
figure.snip0078 figcaption p {
  margin: 0;
  color: #ffffff;
}
figure.snip0078 figcaption h2 {
  font-weight: 400;

}
figure.snip0078 figcaption h2 span {
  font-weight: 800;
}
figure.snip0078 figcaption p {
  font-size: 0.9em;
  font-weight: 500;
  opacity: 0.65;
}
figure.snip0078 a {
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  position: absolute;
  z-index: 1;
}
figure.snip0078.blue figcaption {
  background: #fc4848;
}
figure.snip0078.blue img {

}
figure.snip0078.red figcaption {
  background: #81261d;
}
figure.snip0078.red img {
  border: 10px solid #81261d;
}
figure.snip0078.yellow figcaption {
  background: #a85913;
}
figure.snip0078.yellow img {
  border: 10px solid #a85913;
}
figure.snip0078:hover figcaption,
figure.snip0078.hover figcaption {

}
figure.snip0078:hover.blue img,
figure.snip0078.hover.blue img {

}
figure.snip0078:hover.red img,
figure.snip0078.hover.red img {
  border: 10px solid #c0392b;
}
figure.snip0078:hover.yellow img,
figure.snip0078.hover.yellow img {
  border: 10px solid #e67e22;
}
s

</style>



<!-- Services Section Start -->
<section class="services">
<!--Accordion wrapper-->
<div class="container">
  <style type="text/css">

  .row.heading h2 {
    color: #fff;
    font-size: 52.52px;
    line-height: 95px;
    font-weight: 400;
    text-align: center;
    margin: 0 0 40px;
    padding-bottom: 20px;
    text-transform: uppercase;
}
ul{
  margin:0;
  padding:0;
  list-style:none;
}
.heading.heading-icon {
    display: block;
}
.padding-lg {
  display: block;
  padding-top: 60px;
  padding-bottom: 60px;
}
.practice-area.padding-lg {
    padding-bottom: 55px;
    padding-top: 55px;
}
.practice-area .inner{
     border:1px solid #999999;
   text-align:center;
   margin-bottom:28px;
   padding:40px 25px;
}
.our-webcoderskull .cnt-block:hover {
    box-shadow: 0px 0px 10px rgba(0,0,0,0.3);
    border: 0;
}
.practice-area .inner h3{
    color:#3c3c3c;
  font-size:24px;
  font-weight:500;
  font-family: 'Rubik', sans-serif;
  padding: 10px 0;
}
.practice-area .inner p{
    font-size:14px;
  line-height:22px;
  font-weight:400;
}
.practice-area .inner img{
  display:inline-block;
}


#lo1{
  background: url("{{ url('centro') }}/imagenes/img2/Imagen-1.png") no-repeat center top / cover;
}

#lo2{
  background: url("{{ url('centro') }}/imagenes/4.png") no-repeat center top / cover;

}
.our-webcoderskull .cnt-block{
;
   float:left;
   width:100%;
   background:#fff;
   padding:30px 20px;
   text-align:center;
   border:2px solid #d5d5d5;
   margin: 0 0 28px;
}
.our-webcoderskull .cnt-block figure{

   width:148px;
   height:148px;
   border-radius:100%;
   display:inline-block;
   margin-bottom: 15px;
}
.our-webcoderskull .cnt-block img{
   width:148px;
   height:148px;
   border-radius:100%;
}
.our-webcoderskull .cnt-block h3{
   color:#2a2a2a;
   font-size:20px;
   font-weight:500;
   padding:6px 0;

}
.our-webcoderskull .cnt-block h3 a{
  text-decoration:none;
  color:#2a2a2a;
}
.our-webcoderskull .cnt-block h3 a:hover{
  color:#337ab7;
}
.our-webcoderskull .cnt-block p{
   color:#2a2a2a;
   font-size:13px;
   line-height:20px;
   font-weight:400;
}
.our-webcoderskull .cnt-block .follow-us{
  margin:20px 0 0;
}
.our-webcoderskull .cnt-block .follow-us li{
    display:inline-block;
  width:auto;
  margin:0 5px;
}
.our-webcoderskull .cnt-block .follow-us li .fa{
   font-size:24px;
   color:#767676;
}
.our-webcoderskull .cnt-block .follow-us li .fa:hover{
   color:#025a8e;
}

elemento{
  height: 0px;
}

</style>

<div data-aos="fade-right"
      data-aos-duration="700">
            <h2 style="color: #606060; " align="center">Cursos y Capacitaciones</h2>
              <hr>
             <p align="center" style="text-transform:none; color: black">El Centro de Excelencia en Prevención de Cáncer, como parte de su programa de formación y entrenamiento de los profesionales de la salud, brindará cursos y congresos especializados en los diferentes tipos de cáncer. </p>
</div>

@include('errors.request')
    @include('errors.flash')

<style type="text/css">
  .contenedor{
    position: relative;
    /*display: inline-block;*/
    text-align: center;

   }

.texto-encima{
    position: absolute;
    top: 10px;
    left: 10px;
}
.centrado{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 180px;
}
</style>
<section>
  <div class="container">

    <h2 class="text-uppercase mb-0 py-1" align="center" style="font-size:20px">
                   1ER CURSO INTERNACIONAL EN CONTROL DE CÁNCER PARA PRIMERA NIVEL DE ATENCIÓN
    </h2>
    <br>
     <div class="row">


         <div class="col-md-6 d-inline d-sm-none" style="background: url('{{ url('centro') }}/imagenes/Publicidad/Celular/Publicidad-6.png'); background-size: cover;
                  background-repeat: no-repeat;
                  background-position: center; height: 400px">  </div>
          <div class="col-md-6 d-none d-sm-inline d-md-none" style="background: url('{{ url('centro') }}/imagenes/Publicidad/Celular/Publicidad-6.png'); background-size: cover;
                  background-repeat: no-repeat;
                  background-position: center; height: 400px">  </div>
         <div class="col-md-6 d-none d-md-inline d-lg-none" style="background: url('{{ url('centro') }}/imagenes/Publicidad/Web/Publicidad-6.png'); background-size: cover;
                  background-repeat: no-repeat;
                  background-position: center; height: 400px">  </div>
          <div class="col-md-6 d-none d-lg-inline d-xl-none" style="background: url('{{ url('centro') }}/imagenes/Publicidad/Web/Publicidad-6.png'); background-size: cover;
                  background-repeat: no-repeat;
                  background-position: center; height: 400px">  </div>
          <div class="col-md-6 d-none d-xl-inline" style="background: url('{{ url('centro') }}/imagenes/Publicidad/Web/Publicidad-6.png'); background-size: cover;
                  background-repeat: no-repeat;
                  background-position: center; height: 400px">  </div>


      <!--  <div class="col-md-6 .hidden-sm-up" style="background: url('http://localhost/centroLiga/public/centro/imagenes/img2/congreso.png'); background-size: cover;
                  background-repeat: no-repeat;
                  background-position: center; height: 400px">  </div>-->

     <div class="col-md-6 " style="background:#ea2929; height: 400px" >
         <br>
        <div class="d-flex justify-content-center" style="border-right: 2px solid white; border-left: 2px solid white; height: 350px; ">
          <div class="container d-flex align-items-center">
            <div class="container">

            <div class="cnt-block equal-hight" data-aos="fade-right"
      data-aos-duration="700">
          <!-- <h5 style="color:white" align="center">Curso de Prevención de Cancer En Primer Nivel de Atención de Salud</h5>-->
             <div class="mb-2"></div>
            <h6 align="center" style="color:white" >Requisitos: Profesiones de la salud.</h6>
            <div class="mb-2" ></div>
            <h6 align="center" style="color:white">Fecha de inicio: 09 y 10 de abril</h6>
            <div class="mb-2"></div>
            <h6 align="center" style="color:white">Lugar: Hotel Sol de Oro, Calle San Martín 305 miraflores</h6>
           <div class="mb-2"></div><br>
            <div class="d-flex justify-content-center">
              <a class="btn btn-primary btn-download" href="{{ url('/') }}/words/pdfcongreso.pdf" download="TEMARIO 1ER CURSO INTERNACIONAL EN CONTROL DE CÁNCER PARA PRIMERA NIVEL DE ATENCIÓN.pdf" style="background: white; border: 0px; color:red; height: 33px"><span class="glyphicon glyphicon-ok"></span> Descargar Temario</a>
              <br><br><br>

            </div>
          </div>
            </div>

          </div>
       </div>
     </div>
     </div>

  </div>

<style type="text/css">
  figure p{
         color: white;
  }
</style>
<div class="container">
  <div class="row">
    <div class="col-md-3">

    </div>
  </div>
</div>

<div class="container">
  <br>
  <div class="section-title">
            <h4 style="font-size:30px; color: #606060;">INSCRIPCIÓN</h4>
  </div>
  <div class="row">
      <div data-aos="flip-left"
      data-aos-duration="700" class="col-md-3 col-sm-12 d-flex justify-content-center" style="margin-bottom: 10px;">
            <a href="{{route('inscripcion.index')}}">
              <div class="contenedor">
                  <img src="{{ url('centro') }}/imagenes/precio-1.png" style='width: 250px' />
                  <div class="texto-encima"></div>
                  <div class="centrado">
                      <h5 style="color:white">Médicos Especialistas</h5>
                      <h7 style="color:white; font-size:15px;">Pre Incripción: 250 soles</h7>
                      <div style="color:white" class="md-3"></div>
                      <p class="text-center" style="font-size: 11px; color:white;" >Día del evento: 300 soles</p>
                  </div>
                </div>
            </a>
      </div>
      <div data-aos="flip-right"
      data-aos-duration="700" class="col-md-3 col-sm-12 d-flex justify-content-center" style="margin-bottom: 10px;">
          <a href="{{route('inscripcion.index')}}">
          <div class="contenedor">
            <img src="{{ url('centro') }}/imagenes/precio-1.png" style='width: 250px' />
            <div class="texto-encima"></div>
               <div class="centrado">
                <h5 style="color:white">Médicos Generales</h5>
                <h7 style="color:white; font-size:15px;">Pre Incripción: 200 soles</h7>
                <div style="color:white" class="md-3"></div>
                <p class="text-center" style="font-size: 11px; color:white;" >Día del evento: 250 soles</p>
              </div>
        </div>
          </a>
    </div>
    <div data-aos="flip-left"
     data-aos-duration="700" class="col-md-3 col-sm-12 d-flex justify-content-center" style="margin-bottom: 10px;">
          <a href="{{route('inscripcion.index')}}">
          <div class="contenedor">
            <img src="{{ url('centro') }}/imagenes/precio-1.png" style='width: 250px' />
            <div class="texto-encima"></div>
               <div class="centrado">
                <h5 style="color:white">Otros Profesionales</h5>
                <h7 style="color:white; font-size:15px;">Pre Incripción: 200 soles</h7>
                <div style="color:white" class="md-3"></div>
                <p class="text-center" style="font-size: 11px; color:white;" >Día del evento: 250 soles</p>
              </div>
        </div>
          </a>
    </div>
    <div data-aos="flip-left"
      data-aos-duration="700" class="col-md-3 col-sm-12 d-flex justify-content-center" style="margin-bottom: 10px;">
          <a href="{{route('inscripcion.index')}}">
          <div class="contenedor">
            <img src="{{ url('centro') }}/imagenes/precio-1.png" style='width: 250px' />

            <div class="texto-encima"></div>
               <div class="mb-4"></div>
               <div class="centrado">
                <h5 style="color:white">Internos</h5>
                <div class="mb-3"></div>
                <h7 style="color:white; font-size:15px;">Pre Incripción: 100 soles</h7>
                <div style="color:white" class="md-3"></div>
                <p class="text-center" style="font-size: 11px; color:white;" >Día del evento: 150 soles</p>
              </div>
        </div>
          </a>
    </div>
</div>
</div>
</section>

</div>
</section>

<style type="text/css">

</style>


<style type="text/css">
  .row.heading h2 {
    color: #fff;
    font-size: 52.52px;
    line-height: 95px;
    font-weight: 400;
    text-align: center;
    margin: 0 0 40px;
    padding-bottom: 20px;

}
ul{
  margin:0;
  padding:0;
  list-style:none;
}
.heading.heading-icon {
    display: block;
}
.padding-lg {
  display: block;
  padding-top: 60px;
  padding-bottom: 60px;
}
.practice-area.padding-lg {
    padding-bottom: 55px;
    padding-top: 55px;
}
.practice-area .inner{
     border:1px solid #999999;
   text-align:center;
   margin-bottom:28px;
   padding:40px 25px;
}
.our-webcoderskull .cnt-block:hover {
    box-shadow: 0px 0px 10px rgba(0,0,0,0.3);
    border: 0;
}
.practice-area .inner h3{
    color:#3c3c3c;
  font-size:24px;
  font-weight:500;
  font-family: 'Poppins', sans-serif;
  padding: 10px 0;
}
.practice-area .inner p{
    font-size:14px;
  line-height:22px;
  font-weight:400;
}
.practice-area .inner img{
  display:inline-block;
}


#lo1{
  background: url("{{ url('centro') }}/imagenes/img2/Imagen-1.png") no-repeat center top / cover;
}

#lo2{
  background: url("{{ url('centro') }}/imagenes/4.png") no-repeat center top / cover;

}
.our-webcoderskull .cnt-block{
;
   float:left;
   width:100%;
   background:#fff;
   padding:30px 20px;
   text-align:center;
   border:2px solid #d5d5d5;
   margin: 0 0 28px;
}
.our-webcoderskull .cnt-block figure{

   width:148px;
   height:148px;
   border-radius:100%;
   display:inline-block;
   margin-bottom: 15px;
}
.our-webcoderskull .cnt-block img{
   width:148px;
   height:148px;
   border-radius:100%;
}
.our-webcoderskull .cnt-block h3{
   color:#2a2a2a;
   font-size:20px;
   font-weight:500;
   padding:6px 0;
   text-transform:uppercase;
}
.our-webcoderskull .cnt-block h3 a{
  text-decoration:none;
  color:#2a2a2a;
}
.our-webcoderskull .cnt-block h3 a:hover{
  color:#337ab7;
}
.our-webcoderskull .cnt-block p{
   color:#2a2a2a;
   font-size:13px;
   line-height:20px;
   font-weight:400;
}
.our-webcoderskull .cnt-block .follow-us{
  margin:20px 0 0;
}
.our-webcoderskull .cnt-block .follow-us li{
    display:inline-block;
  width:auto;
  margin:0 5px;
}
.our-webcoderskull .cnt-block .follow-us li .fa{
   font-size:24px;
   color:#767676;
}
.our-webcoderskull .cnt-block .follow-us li .fa:hover{
   color:#025a8e;
}

</style>
<section class="our-webcoderskull padding-lg" id="lo1">
  <br><br><br>
  <div class="container">
     <div class="row">

            <div class="col-md-2 col-sm-12" >

            </div>
            <div class="col-md-4 col-sm-12" data-aos="zoom-in"
     data-aos-duration="700" style="background:url('{{ url('centro') }}/imagenes/img2/Marco.png'); background-size: cover;
                  background-repeat: no-repeat;
                  background-position: center;  height: 350px; padding: 35px;" >
                 <div class="d-flex justify-content-center">
                 <img id="imgG" src="{{ url('centro') }}/imagenes/img2/Icon-Certificacion.png" alt="Avatar" style="height :100px">
               </div>
               <h2 align="center">CERTIFICACIÓN</h2>
               <p align="center">Se otorgará el número de créditos brindados por los colegios profesionales: </p>

              <div class="row d-flex justify-content-center">

                <div class="d-flex justify-content-center  mb-3">
                   <div class="p-2 bd-highlight">
                     <a href="https://www.cep.org.pe/">
                       <img src="{{ url('centro') }}/imagenes/logo/cme.jpeg" class="hvr-grow-shadow" alt="" width="70px" height="70px">
                    </a>
                  </div>
                  <div class="p-1 bd-highlight">
                     <a href="http://www.usmp.edu.pe/fobstetri/escuelas/obstetricia/index.php">
                       <img src="{{ url('centro') }}/imagenes/logo/Afiche-CEPC-1.png" class="hvr-grow-shadow" alt="" width="70px" height="70px">
                    </a>
                  </div>
                  <div class="p-1 bd-highlight">
                     <a href="https://www.cmp.org.pe/">
                       <img src="{{ url('centro') }}/imagenes/logo/Afiche-CEPC-2.png" class="hvr-grow-shadow" alt="" width="70px" height="70px">
                    </a>
                  </div>
                   <div class="p-1 bd-highlight">
                     <a href="http://colegiodeobstetrasdelperu.org/">
                       <img src="{{ url('centro') }}/imagenes/logo/Afiche-CEPC-3.png" class="hvr-grow-shadow" alt="" width="70px" height="70px">
                    </a>
                  </div>





                </div>

              </div>

            </div>



            <div data-aos="zoom-in"
    data-aos-duration="700" class="col-md-4 col-sm-12" style="background:url('{{ url('centro') }}/imagenes/img2/Marco.png'); background-size: cover;
                  background-repeat: no-repeat;
                  background-position: center;  height: 350px; padding: 35px;" >
                 <div class="d-flex justify-content-center">
                 <img id="imgG" src="{{ url('centro') }}/imagenes/img2/Icon-Modalidad.png" alt="Avatar" style="height:100px">
               </div>
               <h2 align="center">MODALIDAD</h2>
               <p align="center">Presencial</p>
            </div>





        </div>
  </div>
</section>

@endsection

