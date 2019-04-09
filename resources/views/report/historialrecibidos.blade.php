 <!DOCTYPE html>
 <html>
 <head>
   <title></title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 </head>
 <body>
 <div class="container-fluid">
<style type="text/css">
  table {
  border-collapse: collapse;
  }
</style>
   <div class="row">
     <div class="col-md-4">
         <img src="{{ url('centro')}}/imagenes/Logotipo1.png" alt="First slide" style="width: 300px">
     </div>
     <div class="col-md-4">

     </div>
     <div class="col-md-4">

     </div>
   </div>

<h2 align="center" >Historial de Inscripciones {{ $respuesta }}</h2>

<h5>Nombre Curso : <p style=" text-transform: capitalize;">{{ $curso }}</p></h5>
  <table class="table table-bordered" border="1">
    <thead>
      <tr>
        <th>N°</th>
        <th>DNI</th>
        <th>Nombre</th>
        <th>Número</th>
        <th>Correo Electrónico</th>
        <th>Voucher</th>
      </tr>
    </thead>
    <tbody>
       @php
         $cont =0;
       @endphp
       @foreach($register as $value)
          @php
         $cont ++;
       @endphp
          <tr>
            <td>{{ $cont }}</td>
            <td>{{ $value->dni }}</td>
            <td>{{ $value->nombre }}</td>
            <td>{{ $value->numero }}</td>
            <td>{{ $value->email }}</td>
            <td><a href="{{ url( $value->voucher ) }}" download="Voucher {{ $value->nombre }}">Descargar Voucher</a></td>
          </tr>
       @endforeach

    </tbody>
  </table>
</div>
 </body>
 </html>





