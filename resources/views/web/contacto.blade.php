@extends('layouts.principal')

@section('content')
<!-- Contact section Start -->
   <iframe src="{{url("mapsolo.html")}}" height="450" width="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
<br>
       <div class="section-title" >
            <h4 style="color: #606060; " data-aos="fade-down"
      data-aos-duration="700" align="center">Contacto</h4>
       </div>
<div class="container">

    @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div><br />
      @endif


    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                  @include('errors.request')
         @include('errors.flash')
                 <form class="contact100-form validate-form" enctype="multipart/form-data" action="{{ route('contactos2.store') }} " method="post"  id="avatarForm">


                      {!! Form::open(['route'=>'contactos2.store', 'method'=>'POST',"class"=>"form form-id",'files' => true, 'id'=>'form-id']) !!}
                      {!! Form::token() !!}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group" data-aos="fade-right" data-aos-duration="700">
                            <label for="name">
                                Nombre</label>
                            <input type="text" class="form-control" name="nombre"  id="nombre" placeholder="Ingresa nombre" required="required" />
                        </div>
                        <div class="form-group" data-aos="fade-right" data-aos-duration="700">
                            <label for="email">
                                Correo Electrónico</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Ingresa correo electrónico" required="required" /></div>
                        </div>
                        <div class="form-group">
                           <div class="captcha_wrapper">
                       <div class="g-recaptcha" data-sitekey="{{env('CAPTCHA_KEY')}}"></div>
                      </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group" data-aos="zoom-in" data-aos-duration="700">
                            <label for="name">
                                Mensaje</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Escribe el mensaje"></textarea>
                        </div>
                    </div>

                    <div class="col-md-4 offset-4">

                        <button type="submit" class="btn btn-primary" id="btnContactUs">
                            Enviar mensaje</button>
                    </div>

                    <div class="col-md-4 d-flex">

                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4" data-aos="flip-left" data-aos-duration="700">
            <form>

            <address>
                <b>Para mayor información comunicarse con</b><br>
                Lic. Catya López Ampuero<br>Coordinadora de Educación
                <br>
Central Telefónica: (01)204-0404 - Anexo 244
            </address>

            </form>
        </div>
    </div>
</div>

<br><br><br>
@endsection

@section('javascript')

  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endsection

