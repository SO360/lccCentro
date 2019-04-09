@extends('layouts.principal')

@section('content')
    <section class="banner" style="background-image: url({{ url('centro') }}/imagenes/3.png);">

    </section>

   
    <br>


<div class="container">
             <h2 style="color: #606060; " align="center">Sobre el Cancer</h2>
              <hr>
              <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="main-timeline2">
                        <div class="timeline">
                              <div class="row" style="margin: 0px;">
                                 <div class="col-md-1 justify-content-center">
                                    <span class="icon fa fa-globe"></span>
                                 </div>
                                 <div class="col-md-6">
                                     <h3 class="title" style="color: #606060; ">Cáncer en el mundo</h3>
                                 </div>
                             </div>
                               
                           
                                <br>                                
                                <p class="description" align="justify">
                                     Hoy en día, en el mundo, el cáncer causa 18 millones de nuevos casos al año, generando 9.6 millones de muertes. Además, 43.8 millones de personas viven con cáncer actualmente. Se estima que esta cifra se incrementará alarmantemente hasta 2020, sobre todo en países de desarrollo.
                                </p>
                      
                        </div>
                        <br>
                        <div class="timeline">
                             <div class="row" style="margin: 0px;">
                                 <div class="col-md-1 justify-content-center">
                                     <span class="icon fa fa-rocket " ></span>
                                 </div>
                                 <div class="col-md-6">
                                     <h3 class="title" style="color: #606060; "> El cáncer en el Perú</h3>
                                 </div>
                             </div>
                                <br> 
                                <p class="description" align="justify">
                                    Según el último informe realizado por la Agencia Internacional de Investigación sobre el Cáncer (IARC), Globocan 2018, en el Perú al año se presentan más de 66 mil 627 nuevos casos de cáncer y más de 33 mil personas fallecen a causa de la enfermedad, por falta de cultura preventiva y estilos de vida saludable. Además, el 85% de los casos de cáncer en el Perú se detectan en estadios avanzados, lo que repercute en menores probabilidades de curación, menor calidad de vida, mayor costo de tratamientos y una elevada mortalidad.
                                </p>
                                <style>
                                ul {
                                  display: block;
                                  list-style-type: disc;
                                  margin-top: 1em;
                                  margin-bottom: 1 em;
                                  margin-left: 4px;
                                  margin-right: 0;
                                  padding-left: 80px;
                                }

                                </style>
                               <p class="description"> Los 5 tipos de cáncer con mayor incidencia en el Perú son: </p> 
                                <ul>
                                    <li>PRÓSTATA (7,598 nuevos casos y 2,721 muertes)</li>
                                    <li>MAMA (6,985 nuevos casos y 1858 muertes)</li>
                                    <li>ESTÓMAGO (5,731 nuevos casos y 4,606 muerte)</li>
                                    <li>COLON (4,610 nuevos casos y 1858 muertes)</li>
                                    <li>CUELLO UTERINO (4,103 nuevos casos y 1,836 fallecen)</li>
                                </ul>
                                
                         
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
@endsection

