@extends('layouts.app')
@section('meta')
   <title>Centro de Excelencia en Prevención de Cáncer</title>
    <meta name="description" content="" />
@endsection
@section('content')
   <div class="box box-primary">
        <div class="box-header with-border" >
            <div class="container">
               <h3 class="box-title" align="center">Administración de Inscripciones</h3>
               <br><br>
                Este sistema permitira dar seguimiento a las inscripciones de los cursos disponibles y comentarios que lleguen de la página principal.
                 <section class="content">

                    <div class="row">
                      <div class="col-lg-3 col-xs-6 offset-6">

                        <div class="small-box bg-aqua">
                          <div class="inner">
                            <h3>{{ $ins }}</h3>

                            <p style="color: white;">Numero de Inscripciones</p>
                          </div>
                          <div class="icon">
                            <i class="ion ion-person-add"></i>

                          </div>
                          <a href="{{ route('admin.docsearch.index') }}" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                      </div>


                      <div class="col-lg-3 col-xs-6">

                        <div class="small-box bg-yellow">
                          <div class="inner">
                            <h3>{{ $com }}</h3>

                            <p style="color: white;">Numero de Comentarios</p>
                          </div>
                          <div class="icon">
                            <i class="ion ion-bag"></i>
                          </div>
                          <a href="{{ route('admin.comentarios.index') }}" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                      </div>


                    </div>

                </section>
             </div>
          </div>
   </div>



<!--

    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Últimas Noticias Nacional Registrada</h3>
            </div>

           <div class="col-md-6">



                <div class="container-fluid" id="No">
            <table class="table table-bordered" id="In">
               <thead>
                  <tr>
                     <th>N°</th>
                     <th>Título</th>
                     <th>Fecha</th>
                     <th>Habilitar</th>

                  </tr>
               </thead>
            </table>
        </div>

        </div>


          </div>


        </div>


              <div class="col-md-6">



                <div class="container-fluid" id="No">
            <table class="table table-bordered" id="Na">
               <thead>
                  <tr>
                     <th>N°</th>
                     <th>Título</th>
                     <th>Fecha</th>
                     <th>Habilitar</th>

                  </tr>
               </thead>
            </table>
        </div>

        </div>

      </div>


    </section>

 -->

@endsection


@section('javascript')

<script type="text/javascript">


</script>





@endsection