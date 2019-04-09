@extends('layouts.auth')

@section('content')
    <div class="row text-center">
         <a href="{{ url("/") }}"> <img src={{url('centro')}}/imagenes/lcc.png width="200" height="90"></a>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">

            <div class="panel panel-success">
                <div class="panel-heading"><p style="color:black">Ingreso</p></div>
                <div class="panel-body">

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            Estas credenciales no coinciden con nuestros registros (Verifique si ha sido activado para iniciar sesión en el sistema).
                            <br><br>
                            <ul>

                            </ul>
                        </div>
                    @endif

                    <form class="form-horizontal"
                          role="form"
                          method="POST"
                          action="{{ url('login') }}">
                        <input type="hidden"
                               name="_token"
                               value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-md-4 control-label">Usuario</label>

                            <div class="col-md-6">
                                <input type="email"
                                       class="form-control"
                                       name="email"
                                       value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Clave</label>

                            <div class="col-md-6">
                                <input type="password"
                                       class="form-control"
                                       name="password">
                            </div>
                        </div>





                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit"
                                        class="btn btn-primary"
                                        style="margin-right: 15px;">
                                   Ingresar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection