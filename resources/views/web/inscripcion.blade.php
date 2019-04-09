@extends('layouts.principal')

@section('content')

    <img class="d-inline d-sm-none" src="{{ url('centro')}}/imagenes/Slider/Celular/Slider-6.png"  style="width:430px; height: 400px; "alt="First slide">
      <img class="d-none d-sm-inline d-md-none" src="{{ url('centro')}}/imagenes/Slider/Celular/Slider-6.png" alt="First slide" style="width:90000px; height: 400px; ">
      <img class="d-none d-md-inline d-lg-none " src="{{ url('centro')}}/imagenes/Slider/Celular/Slider-6.png" alt="First slide" style="width:800px; height: 400px; ">
      <img class="d-none d-lg-inline d-xl-none" src="{{ url('centro')}}/imagenes/Slider/Web-Windows/Slider-6.png" alt="First slide">
      <img class="d-none d-xl-inline" data-aos="fade-right"
      data-aos-duration="700" src="{{ url('centro')}}/imagenes/Slider/Web-iMac/Slider-6.png" alt="First slide" style="width:1400px; height: 400px; ">
     <br><br>
       <div class="section-title" data-aos="zoom-in"
      data-aos-duration="900" >
            <h4 style="color: #606060; " align="center">Inscripción</h4>
       </div>

       <div class="container">
        @include('errors.request')
         @include('errors.flash')
                 <form class="contact100-form validate-form" enctype="multipart/form-data" action="{{ route('inscripcion.store') }} " method="post"  id="avatarForm">

                      <form class="contact100-form validate-form"  enctype="multipart/form-data">

                      {!! Form::open(['route'=>'inscripcion.store', 'method'=>'POST',"class"=>"form form-id",'files' => true, 'id'=>'form-id']) !!}
                      {!! Form::token() !!}
                <div class="row">
                  <div class="col-md-6" data-aos="fade-right"
      data-aos-duration="700">
                    <div class="form-group">
                            <label for="name">
                                Nombre </label>
                            <input type="text" class="form-control" data-parsley-required name="name" placeholder="Ingresa nombre" />
                        </div>
                  </div>

                    <div class="col-md-6" data-aos="fade-left"
      data-aos-duration="700">
                       <div class="form-group">
                            <label for="name">
                                DNI</label>
                      <input type="text" class="form-control dni" data-parsley-required id="dni" name="dni" placeholder="Ingresa DNI"   />
                        </div>
                   </div>
                </div>
                <div class="row">
                   <div class="col-md-6" data-aos="fade-right"
      data-aos-duration="700">
                       <div class="form-group">
                            <label for="name">
                                Correo Electrónico</label>
                      <input type="email" class="form-control" name="email" data-parsley-required placeholder="Ingresa correo electrónico"  data-parsley-type="email"   />
                        </div>
                   </div>
                   <div class="col-md-6" data-aos="fade-left"
      data-aos-duration="700">
                       <div class="form-group">
                            <label for="name">
                                Número telefónico</label>
                      <input type="text" class="form-control telefono" data-parsley-required  name="cell" placeholder="Ingresa tu número telefónico"  />
                        </div>
                   </div>
                </div>
                <div class="row">
                  <div class="col-md-6" data-aos="fade-right"
      data-aos-duration="700">
                    <div class="form-group">
                          <label for="exampleFormControlSelect1">Seleccionar Curso</label>
                          <select class="form-control" id="exampleFormControlSelect1" data-parsley-required name="curso">
                             <option value="" selected="">Selecionar </option>
                             @foreach($curso as $value)
                                 <option value="{{ $value->id }}">{{ $value->nombre }}</option>
                            @endforeach
                            <!--<option value="2">Curso de Asesoria Genética de Cancer Dirigido al Perimer Nivel de Atención de Salud</option>-->
                          </select>
                    </div>
                  </div>
                   <div class="col-md-6" data-aos="fade-left"
      data-aos-duration="700">
                      <div class="form-group">
                              <label for="exampleFormControlSelect1">Seleccionar tipo de participante</label>
                              <select class="form-control" data-parsley-required  id="exampleFormControlSelect1" name="tipo">
                                 <option value="" selected="">Selecionar </option>
                                <option value="1">Médicos Especialistas </option>
                                <option value="2">Médicos Generales</option>
                                <option value="3">Otras Profesiones</option>
                                <option value="4">Internos</option>
                              </select>
                          </div>
                   </div>
                </div>

                        {{ csrf_field() }}
                    <div class="d-flex justify-content-center" data-aos="zoom-in" data-aos-duration="900">
                    	 <div class=" mr-sm-2 col-sm-5 wrap-input-container ">
                        <label class="custom-file-upload form-control">
                          <i class="fa fa-cloud-upload"></i> Añadir voucher de pago
                        </label>
                        <input class="file-upload" data-parsley-required name="archivo" type="file">
                      </div>

                    </div>


                <br>
                <div class="container" data-aos="zoom-in" data-aos-duration="900">
                      <h3 class="text-center">Términos y Condiciones</h3>
                </div><br>

                <div data-aos="zoom-in" data-aos-duration="900" class="container text-justify" style="overflow: scroll; height: 200px;">


                <p class="primeralinea">Este sitio web es operado por Liga Contra el Cancer. En todo el sitio, los términos “nosotros”, “nos” y “nuestro” se refieren a Liga Contra el Cancer. Liga Contra el Cancer ofrece este sitio web, incluyendo toda la información, herramientas y servicios disponibles para ti en este sitio, el usuario, está condicionado a la aceptación de todos los términos, condiciones, políticas y notificaciones aquí establecidos.</p>

               <p class="primeralinea"> Al visitar nuestro sitio, participas en nuestro “Servicio” y aceptas los siguientes términos y condiciones (“Términos de Servicio”, “Términos”), incluidos todos los términos y condiciones adicionales y las políticas a las que se hace referencia en el presente documento y/o disponible a través de hipervínculos. Estas Condiciones de Servicio se aplican a todos los usuarios del sitio, incluyendo si limitación a usuarios que sean navegadores, proveedores, clientes, comerciantes, y/o colaboradores de contenido.
                </p>
                <p class="primeralinea">
                Por favor, lee estos Términos de Servicio cuidadosamente antes de acceder o utilizar nuestro sitio web. Al acceder o utilizar cualquier parte del sitio, estás aceptando los Términos de Servicio. Si no estás de acuerdo con todos los términos y condiciones de este acuerdo, entonces no deberías acceder a la página web o usar cualquiera de los servicios. Si las Términos de Servicio son considerados una oferta, la aceptación está expresamente limitada a estos Términos de Servicio.
                </p>
                <p class="primeralinea">
                Cualquier función nueva o herramienta que se añadan a la página actual, también estarán sujetas a los Términos de Servicio. Puedes revisar la versión actualizada de los Términos de Servicio, en cualquier momento en esta página. Nos reservamos el derecho de actualizar, cambiar o reemplazar cualquier parte de los Términos de Servicio mediante la publicación de actualizaciones y/o cambios en nuestro sitio web. Es tu responsabilidad chequear esta página periódicamente para verificar cambios. Tu uso continuo o el acceso al sitio web después de la publicación de cualquier cambio constituye la aceptación de dichos cambios.
                </p>

               <h5><b>SECCIÓN 1 - TÉRMINOS DE LA PÁGINA WEB</b></h5>

                 <p class="primeralinea">Al utilizar este sitio, declaras que tienes al menos la mayoría de edad en tu estado o provincia de residencia, o que tienes la mayoría de edad en tu estado o provincia de residencia y que nos has dado tu consentimiento para permitir que cualquiera de tus dependientes menores use este sitio.

                 </p>

                 <p class="primeralinea">
                    No puedes difundir ninguno de nuestros productos con ningún propósito ilegal o no autorizado tampoco puedes, en el uso del Servicio, violar cualquier ley en tu jurisdicción (incluyendo, pero no limitado a las leyes de derecho de autor).

                  No debes transmitir gusanos, virus o cualquier código de naturaleza destructiva.
                 </p>

                 <h5><b>SECCIÓN 2 - INFORMACIÓN PERSONAL</b></h5>

                <p class="primeralinea">Tu presentación de información personal a través del sitio se rige por nuestra Política de Privacidad.</p>

                <p>Protección de Datos Personales
                La vigente Ley de Protección de Datos Personales – Ley 29733 tiene por objeto garantizar el derecho fundamental de las personas a la protección de su privacidad, para lo cual prescribe que el tratamiento de sus datos personales sea proporcional y seguro, de acuerdo con finalidades consentidas por tales personas o habilitadas por ley, previniendo así que tales datos sean objeto de tráfico y/o uso ilícito.
                </p>

                <h5><b>SECCIÓN 3 - USOS PROHIBIDOS</b></h5>
                <p class="primeralinea">
                En adición a otras prohibiciones como se establece en los Términos de Servicio, se prohíbe el uso del sitio o su contenido: (a) para ningún propósito ilegal; (b) para pedirle a otros que realicen o participen en actos ilícitos; (c) para violar cualquier regulación, reglas, leyes internacionales, federales, provinciales o estatales, u ordenanzas locales; (d) para infringir o violar el derecho de propiedad intelectual nuestro o de terceras partes; (e) para acosar, abusar, insultar, dañar, difamar, calumniar, desprestigiar, intimidar o discriminar por razones de género, orientación sexual, religión, tnia, raza, edad, nacionalidad o discapacidad; (f) para presentar información falsa o engañosa; (g) para cargar o transmitir virus o cualquier otro tipo de código malicioso que sea o pueda ser utilizado en cualquier forma que pueda comprometer la funcionalidad o el funcionamiento del Servicio o de cualquier sitio web relacionado, otros sitios o Internet; (h) para recopilar o rastrear información personal de otros; (i) para generar spam, phish, pharm, pretext, spider, crawl, or scrape; (j) para cualquier propósito obsceno o inmoral; o (k) para interferir con o burlar los elementos de seguridad del Servicio o cualquier sitio web relacionado¿ otros sitios o Internet. Nos reservamos el derecho de suspender el uso del Servicio o de cualquier sitio web relacionado por violar cualquiera de los ítems de los usos prohibidos.

                  </p>



                </div>

                <div class="container mt-3">
                  <label class="checkbox-inline"><input type="radio" name='contrato'data-parsley-required  checked="" value="1"> Acuerdo</label>
                  <label class="checkbox-inline"><input type="radio" name='contrato' value=""> Desacuerdo</label>
                </div>
                <div class="d-flex justify-content-center">

                		<div class="captcha_wrapper">
                       <div class="g-recaptcha" data-sitekey="6Le3QJYUAAAAAGNsPwIwJP_w3q3HIa65sAvAMZYZ"></div>
                      </div>

                </div>
                <br>
                <div class="d-flex justify-content-center">
                <div class="col-md-6 d-flex justify-content-center">
                		<br>
                          <button type="submit" class="btn btn-success " id="enviar">
                           Registrar </button>
                 </div>
                 </div>
                <div class="row">


                </div>
                <div class="modal-footer">



                </div>
                </form>
      </div>
<style type="text/css">
  /*

@import url('https://fonts.googleapis.com/css?family=Open+Sans');
font-family: 'Open Sans', sans-serif;

 */

@import url('https://fonts.googleapis.com/css?family=Open+Sans');





</style>

@endsection

@section('javascript')
  <script src="{{ url('adminlte/js/fileinput.min.js') }}"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
 <script type="text/javascript">

       // Dynamically add-on fields

$(function() {


    $('#avatarForm').on('submit', function(event){
        event.preventDefault();
        form_to=$(this);

      if($('#avatarForm').parsley().isValid())
        {
          document.getElementById("avatarForm").submit();
        }
    });

   $('.dni').mask('000000000');
   $('.telefono').mask('(51)000000000');
    // Remove button click
    $(document).on(
        'click',
        '[data-role="dynamic-fields"] > .form-inline [data-role="remove"]',
        function(e) {
            e.preventDefault();
            $(this).closest('.form-inline').remove();
        }
    );
    // Add button click
    $(document).on(
        'click',
        '[data-role="dynamic-fields"] > .form-inline [data-role="add"]',
        function(e) {
            e.preventDefault();
            var container = $(this).closest('[data-role="dynamic-fields"]');
            new_field_group = container.children().filter('.form-inline:first-child').clone();
          new_field_group.find('label').html('Upload Document'); new_field_group.find('input').each(function(){
                $(this).val('');
            });
            container.append(new_field_group);
        }
    );
});



// file upload

$(document).on('change', '.file-upload', function(){

  var i = $(this).prev('label').clone();
  var file = this.files[0].name;
  $(this).prev('label').text(file);
});
          $("#file-3").fileinput({
            showCaption: false,
            showUpload: false,
            browseClass: "btn btn-primary btn-lg",
            fileType: "any"
        });


  $('.alert').fadeOut(7000);
 </script>
@endsection