@extends('adminlte::page')

@section('title', 'Site-Alchichica')


@section('content_header')

<svg height="65" viewBox="0 0 512 512" width="65" xmlns="http://www.w3.org/2000/svg"><g><g fill="#57a4ff"><path d="m488 60a19.994 19.994 0 0 0 -20-20h-440a19.994 19.994 0 0 0 -20 20v300h480zm-232 248a19.994 19.994 0 0 1 -20 20h-168a19.994 19.994 0 0 1 -20-20v-216a19.994 19.994 0 0 1 20-20h168a19.994 19.994 0 0 1 20 20zm208 0a19.994 19.994 0 0 1 -20 20h-136a19.994 19.994 0 0 1 -20-20v-196h176z"/><path d="m314 408h-112l-16 40h-58v24h240v-24h-38z"/><path d="m312 144h32v24h-32z"/><path d="m312 192h32v24h-32z"/><path d="m312 240h32v24h-32z"/><path d="m191.89 142.55c.37-.18.74-.36 1.11-.55l-1.19.24a41.7 41.7 0 0 0 -10.53-19.02 39.305 39.305 0 0 0 -28.28-12.22 40.015 40.015 0 0 0 -40 40v7s31.51 7.88 78.89-15.45z"/><path d="m185 239h-16a16 16 0 0 1 -32 0h-16a40 40 0 0 0 -40 40v48h144v-48a40 40 0 0 0 -40-40z"/></g><g fill="#004fac"><path d="m476 32h-440a28.031 28.031 0 0 0 -28 28v328a28.031 28.031 0 0 0 28 28h152.18l-9.6 24h-42.58a8 8 0 0 0 -8 8v24a8 8 0 0 0 8 8h240a8 8 0 0 0 8-8v-24a8 8 0 0 0 -8-8h-42.58l-9.6-24h152.18a28.031 28.031 0 0 0 28-28v-328a28.031 28.031 0 0 0 -28-28zm-108 424v8h-224v-8zm-172.18-16 9.6-24h101.16l9.6 24zm292.18-52a12.01 12.01 0 0 1 -12 12h-440a12.01 12.01 0 0 1 -12-12v-20h464zm0-36h-464v-292a12.01 12.01 0 0 1 12-12h440a12.01 12.01 0 0 1 12 12z"/><path d="m236 64h-168a28.031 28.031 0 0 0 -28 28v216a28.031 28.031 0 0 0 28 28h168a28.031 28.031 0 0 0 28-28v-216a28.031 28.031 0 0 0 -28-28zm-20 256h-16v-32a8 8 0 0 0 -16 0v32h-64v-32a8 8 0 0 0 -16 0v32h-16v-40a32.036 32.036 0 0 1 32-32h9.38a23.99 23.99 0 0 0 45.24 0h9.38a32.036 32.036 0 0 1 32 32zm-89.65-151.72c12.94 0 32.94-2.34 57.65-12.79v28.51a32 32 0 0 1 -64 0v-15.92c1.88.12 3.99.2 6.35.2zm-6.35-16.24v-.04a32.036 32.036 0 0 1 32-32c12.65 0 23.86 8.04 29.01 19.34-19.84 8.84-36.12 11.77-46.71 12.62a92.371 92.371 0 0 1 -14.3.08zm40 79.28v8.68a8 8 0 0 1 -16 0v-8.68a47.4 47.4 0 0 0 16 0zm88 76.68a12.01 12.01 0 0 1 -12 12h-4v-40a48.051 48.051 0 0 0 -48-48h-8v-6.46a48.012 48.012 0 0 0 24-41.54v-32c0-.23-.01-.45-.03-.68a49.189 49.189 0 0 0 -13.93-32.66 47.054 47.054 0 0 0 -34.04-14.66 48.051 48.051 0 0 0 -48 48v32a48.012 48.012 0 0 0 24 41.54v6.46h-8a48.051 48.051 0 0 0 -48 48v40h-4a12.01 12.01 0 0 1 -12-12v-216a12.01 12.01 0 0 1 12-12h168a12.01 12.01 0 0 1 12 12z"/><path d="m444 64h-136a28.032 28.032 0 0 0 -28 28v216a28.032 28.032 0 0 0 28 28h136a28.032 28.032 0 0 0 28-28v-216a28.032 28.032 0 0 0 -28-28zm12 244a12.013 12.013 0 0 1 -12 12h-136a12.013 12.013 0 0 1 -12-12v-188h160zm-160-204v-12a12.013 12.013 0 0 1 12-12h136a12.013 12.013 0 0 1 12 12v12z"/><path d="m312 176h32a8 8 0 0 0 8-8v-24a8 8 0 0 0 -8-8h-32a8 8 0 0 0 -8 8v24a8 8 0 0 0 8 8zm8-24h16v8h-16z"/><path d="m368 152h72a8 8 0 0 0 0-16h-72a8 8 0 0 0 0 16z"/><path d="m368 176h32a8 8 0 0 0 0-16h-32a8 8 0 0 0 0 16z"/><path d="m312 224h32a8 8 0 0 0 8-8v-24a8 8 0 0 0 -8-8h-32a8 8 0 0 0 -8 8v24a8 8 0 0 0 8 8zm8-24h16v8h-16z"/><path d="m368 200h72a8 8 0 0 0 0-16h-72a8 8 0 0 0 0 16z"/><path d="m368 224h32a8 8 0 0 0 0-16h-32a8 8 0 0 0 0 16z"/><path d="m312 272h32a8 8 0 0 0 8-8v-24a8 8 0 0 0 -8-8h-32a8 8 0 0 0 -8 8v24a8 8 0 0 0 8 8zm8-24h16v8h-16z"/><path d="m368 248h72a8 8 0 0 0 0-16h-72a8 8 0 0 0 0 16z"/><path d="m368 272h32a8 8 0 0 0 0-16h-32a8 8 0 0 0 0 16z"/></g></g></svg>
@stop





@section('content')

<h1 class="text-center font-weight-bold mb-5 display-4 fst-italic" id="titulo" style="color:rgb(235, 177, 143)">RESUMEN  POR FOLIO</h1>
  <div class="container">
      <div class="card col-sm-12" style="background-color:salmon">
          <div class="card-title text-dark">
            <h2>CLIENTE: <span class="badge badge-warning">{{$rego->cliente}}</span></h2>
          </div>
          <div class="card-body text-dark">
            <h3 class="text-center" style="font-font-weight-bold">{{$rego->producto}}</h3>
            <p>MES: <span class="badge badge-primary">{{$rego->mes}}</span></p>
            <p>VENDEDOR:  <span class="badge badge-primary">{{$rego->vendedor}}</span> </p>
            <p> NUM SERIE: <span class="badge badge-primary"> {{$rego->seriep}}</span></p>
            <p>PRODUCTO: <span class="badge badge-primary">{{$rego->mes}}</span></p>
            <p>ESTATUS:  <span class="badge badge-primary">{{$rego->vendedor}}</span> </p>
            <p> FECHA RECEPCION DE OP : <span class="badge badge-primary"> {{$rego->fecha}}</span></p>
            <p>FECHA PROGRAMADA ENTREGA: <span class="badge badge-primary">{{$rego->fechaProgramadaEntrega}}</span></p>
            <p>FECHA DE TERMINO PRODUCCION:  <span class="badge badge-primary">{{$rego->fechaEntrega}}</span> </p>
                  
          </div>
          <div class="card-footer">
            
          </div>
      </div>
  </div>







@stop

@section('css')

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
      $('#luk').DataTable();
  </script>



@stop
