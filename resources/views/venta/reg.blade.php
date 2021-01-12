@extends('adminlte::page')

@section('title', 'Ventas')


@section('content_header')
  <svg id="Layer_35" enable-background="new 0 0 64 64" height="50" viewBox="0 0 64 64" width="50" xmlns="http://www.w3.org/2000/svg"><path d="m62 16-10 10h-1.46c.3-.95.46-1.95.46-3 0-5.52-4.48-10-10-10-2.28 0-4.37.77-6.05 2.05l13.05-13.05z" fill="#b4dd7f"/><path d="m24 26 9.05-9.05c-1.28 1.68-2.05 3.77-2.05 6.05 0 1.05.16 2.05.46 3z" fill="#b4dd7f"/><path d="m38 26h-6.54c-.3-.95-.46-1.95-.46-3 0-2.28.77-4.37 2.05-6.05l1.9-1.9c1.68-1.28 3.77-2.05 6.05-2.05 5.52 0 10 4.48 10 10 0 1.05-.16 2.05-.46 3z" fill="#fcd770"/><path d="m19 59 1-1h42v4h-60v-4h16z" fill="#b4dd7f"/><path d="m18 58h-16v-4h12z" fill="#a0d468"/><path d="m62 58h-42l4-4h17l1 1 1-1h19z" fill="#a0d468"/><path d="m20 58-1 1-1-1-4-4h10z" fill="#8cc152"/><path d="m41 54-4-4h10l-4 4-1 1z" fill="#8cc152"/><path d="m52 26h-1.46-12.54-6.54-7.46-22v28h12 10 17l-4-4h-5-22c0-2.21-1.79-4-4-4v-12c2.21 0 4-1.79 4-4h22 22c0 2.16 1.71 3.92 3.85 3.99.05.01.1.01.15.01v12c-2.21 0-4 1.79-4 4h-7l-4 4h19v-24-4z" fill="#b4dd7f"/><path d="m10 30h22c-5.52 0-10 4.48-10 10s4.48 10 10 10h-22c0-2.21-1.79-4-4-4v-12c2.21 0 4-1.79 4-4z" fill="#e6e9ed"/><path d="m32 50c5.52 0 10-4.48 10-10s-4.48-10-10-10h22c0 2.16 1.71 3.92 3.85 3.99.05.01.1.01.15.01v12c-2.21 0-4 1.79-4 4h-7-10z" fill="#e6e9ed"/><path d="m32 30c5.52 0 10 4.48 10 10s-4.48 10-10 10-10-4.48-10-10 4.48-10 10-10z" fill="#fcd770"/><circle cx="6" cy="30" r="1"/><circle cx="6" cy="50" r="1"/><circle cx="58" cy="30" r="1"/><path d="m32 37c.551 0 1 .448 1 1h2c0-1.302-.839-2.402-2-2.816v-2.184h-2v2h-2v3c0 1.654 1.346 3 3 3 .551 0 1 .448 1 1v1h-1c-.551 0-1-.448-1-1h-2c0 1.302.839 2.402 2 2.816v2.184h2v-2h2v-3c0-1.654-1.346-3-3-3-.551 0-1-.448-1-1v-1z"/><circle cx="38" cy="40" r="1"/><circle cx="26" cy="40" r="1"/><circle cx="58" cy="50" r="1"/><path d="m48 9.071 1.636 1.636 1.414-1.414-3.05-3.05-3.05 3.05 1.414 1.414z"/><path d="m54.707 19.05 3.05-3.05-3.05-3.05-1.414 1.414 1.636 1.636-1.636 1.636z"/><path d="m63.414 16-15.414-15.414-24.414 24.414h-22.586v38h62v-38h-8.586zm-21.414 6.586-.585-.586c-.268-.268-.415-.622-.415-1s.147-.732.414-1l.586-.586 1.585 1.586c.268.268.415.622.415 1s-.147.732-.414 1l-.293.293 1.414 1.414.293-.293c.645-.646 1-1.503 1-2.414 0-.713-.223-1.388-.626-1.959l1.333-1.333-1.414-1.414-1.293 1.292-2-2-2 2c-.645.646-1 1.503-1 2.414s.355 1.769 1 2.414l.585.586c.268.268.415.622.415 1h-2.585c-.268-.268-.415-.622-.415-1s.147-.732.414-1l.293-.293-1.414-1.414-.293.293c-.645.646-1 1.503-1 2.414 0 .346.067.678.165 1h-3.915c-.149-.655-.25-1.321-.25-2 0-1.961.63-3.828 1.819-5.405l1.778-1.778c1.575-1.187 3.442-1.817 5.403-1.817 4.962 0 9 4.037 9 9 0 .679-.102 1.345-.253 2h-6.747c0-.911-.355-1.769-1-2.414zm18.586-6.586-8.724 8.724c.091-.568.138-1.144.138-1.724 0-6.065-4.935-11-11-11-.582 0-1.158.048-1.723.137l8.723-8.723zm-30.449 5.277c-.089.565-.137 1.141-.137 1.723 0 .675.068 1.343.189 2h-3.775zm-7.137 18.723c0-4.963 4.038-9 9-9s9 4.037 9 9-4.038 9-9 9-9-4.037-9-9zm2.695 9h-14.796c-.398-1.956-1.943-3.501-3.899-3.899v-10.202c1.956-.398 3.501-1.943 3.899-3.899h14.796c-2.834 1.992-4.695 5.28-4.695 9s1.861 7.008 4.695 9zm12.61 0c2.834-1.992 4.695-5.28 4.695-9s-1.861-7.008-4.695-9h14.796c.398 1.956 1.943 3.501 3.899 3.899v10.201c-1.956.398-3.501 1.943-3.899 3.899h-14.796zm6.281 2-2.586 2.586-2.586-2.586zm-2.586 5.414 1.414-1.414h17.586v2h-38.586l2-2h16.172zm-23 1.172-2.586-2.586h5.172zm-5.414-2.586 2 2h-12.586v-2zm-10.586 6v-2h14.586l1.414 1.414 1.414-1.414h40.586v2zm58-8h-15.586l2-2h7.586v-1c0-1.654 1.346-3 3-3h1v-14h-1c-1.654 0-3-1.346-3-3v-1h-46v1c0 1.654-1.346 3-3 3h-1v14h1c1.654 0 3 1.346 3 3v1h27.586l2 2h-35.586v-26h58z"/><path d="m12 33h2v2h-2z"/><path d="m16 33h2v2h-2z"/><path d="m50 45h2v2h-2z"/><path d="m46 45h2v2h-2z"/></svg>
@stop

@section('content')


 <h1 class="text-center text-green font-weight-bold mb-4 display-4">REGISTRO VENTA</h1>


 <div class="container">
    @if ( session('message') )
       <div class="alert alert-success">{{ session('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
    </div>
   @endif

 <form  method="POST">
     @csrf
    <div class="form-row">
  <div class="form-group col-md-6">
    <input type="date" class="form-control" placeholder="Ingrese Fecha" name="fecha" required>

  </div>

  <div class="form-group col-md-6">
    <input type="text" class="form-control" placeholder="Orden de Servicio / trabajo" name="Oservicio" required>

  </div>

  <div class="form-group col-md-12">
    <input type="text" class="form-control" placeholder="Cliente" name="Cliente" required>

  </div>

  <div class="form-group col-md-12">
     <select name="Tipo_Producto" class="form-control" required>
       <option selected>Tipo Producto</option>
       <option>Nuevo</option>
       <option>Instalacion</option>
       <option>Reparacion</option>
       <option>Modificacion</option>
     </select>
   </div>
</div>
<div class="form-row">
  <div class="form-group col-md-6">
    <input type="text" class="form-control" placeholder="Tipo Servicio" name="tipo_servicio" required>

  </div>

  <div class="form-group col-md-6">
    <input type="text" name="tipo_unidad" placeholder="Tipo de Unidad" required class="form-control">
   </div>
   <div class="form-group col-md-6">
     <input type="text" class="form-control" placeholder="Nombre del Asesor" name="vendedor" required>

   </div>

  <div class="form-group col-md-6">
    <input type="number" class="form-control" placeholder="Precio" name="precio" required>

  </div>

   <div class="form-group col-md-12">
     <input type="text" class="form-control" placeholder="Comentarios" name="comentarios" required>

   </div>
   <div class="form-group col-md-12">
       <label for="fecg">Fecha Prevista de Entrega</label>
    <input type="date" class="form-control" placeholder="Fecha Prevista De Entrega" name="fechaentrega" required id="fecg">

  </div>


  </div>

  <div  class="d-flex justify-content-center">
   <button class="btn btn-primary btn-block mt-2 mb-5 " type="submit"><svg  id="Capa_1" enable-background="new 0 0 512 512" height="30" viewBox="0 0 512 512" width="30" xmlns="http://www.w3.org/2000/svg"><g><path d="m256 0c-140.7 0-256 115.3-256 256s115.3 256 256 256 256-115.3 256-256-115.3-256-256-256z" fill="#f3f5f9"/><path d="m512 256c0 140.7-115.3 256-256 256v-512c140.7 0 256 115.3 256 256z" fill="#e1e6f0"/><circle cx="256" cy="256" fill="#a0e65c" r="226"/><path d="m482 256c0 124.2-101.8 226-226 226v-452c124.2 0 226 101.8 226 226z" fill="#79cc52"/><path d="m372.675 196.747-42.437-42.422c-5.859-5.859-15.352-5.859-21.211 0l-53.027 53.037-30 30.005-23.042-23.042c-5.859-5.859-15.352-5.859-21.211 0l-42.422 42.422c-5.859 5.859-5.859 15.352 0 21.211l76.069 76.069c2.93 2.93 6.768 4.395 10.605 4.395s7.676-1.465 10.605-4.395l19.396-19.394 116.675-116.675c2.813-2.813 4.395-6.621 4.395-10.605s-1.583-7.793-4.395-10.606z" fill="#f3f5f9"/><path d="m377.069 207.353c0-3.984-1.582-7.793-4.395-10.605l-42.437-42.422c-5.859-5.859-15.352-5.859-21.211 0l-53.026 53.036v127.271l116.675-116.675c2.812-2.812 4.394-6.621 4.394-10.605z" fill="#e1e6f0"/></g></svg>Guardar</button>
  </div>
    </form>
</div>

<table class="table mt-5" id="tabla6666">
    <thead class="thead-dark">
      <tr>

        <th scope="col">FECHA </th>
        <th scope="col">ORDEN DE SERVICIO</th>
        <th scope="col">CLIENTE</th>
        <th scope="col">TIPO PRODUCTO</th>
        <th scope="col">TIPO SERVICIO</th>
        <th scope="col">TIPO UNIDAD</th>
        <th scope="col">VENDEDOR</th>
        <th scope="col">PRECIO</th>
      </tr>
    </thead>
    <tbody>
      @foreach($mel as $f)
      <tr>
        <th scope="row">{{$f->fecha}}</th>
        <th scope="row">{{$f->Oservicio}}</th>
        <th scope="row">{{$f->Cliente}}</th>
        <th scope="row">{{$f->Tipo_Producto}}</th>
        <th scope="row">{{$f->tipo_servicio}}</th>
        <th scope="row">{{$f->tipo_unidad}}</th>
        <th scope="row">{{$f->vendedor}}</th>
        <th scope="row">${{$f->precio}}</th>
      </tr>
      @endforeach
    </tbody>
  </table>




@stop

@section('css')
<link href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Langar&display=swap" rel="stylesheet">




<style>

    h1,body{
     font-family: 'Langar', cursive;
    }
</style>

@stop

@section('js')




<script>
    $(document).ready(function() {
    $('#tabla6666').DataTable( {
        responsive: true,
        dom: 'lBftipr',
        buttons: [
            {
              extend:'excelHtml5',
              text:'<i class="fas fa-file-excel"></i>',
              className:"btn btn-success",
              titleAttr:' exportar a excel'
            },
            {
              extend:'pdfHtml5',
              text:'<i class="fas fa-file-pdf"></i>',
              className:"btn btn-danger",
              titleAttr:' exportar a pdf'
            },
            {
              extend:'print',
              text:'<i class="fas fa-print"></i>',
              className:"btn btn-info",
              titleAttr:'imprimir',
            },
            {
              extend:'csv',
              text:'<i class="fas fa-file-excel"></i>',
              className:"btn btn-primary",
              titleAttr:'exportar a csv',
            }

        ]
    } );
} );


 </script>

   <script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
   <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.flash.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
   <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
   <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>


@stop
