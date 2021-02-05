@extends('adminlte::page')

@section('title', 'Site-Rendimiento')


@section('content_header')

<svg height="65" viewBox="0 0 512 512" width="65" xmlns="http://www.w3.org/2000/svg"><g id="Flat"><path d="m40 424h312v64h-312z" fill="#e0e0de"/><path d="m320 64v360h-256v-360a40 40 0 0 1 40-40h176a40 40 0 0 1 40 40z" fill="#348fd9"/><path d="m320 125.57v298.43h-256v-101.53c95.64-32.07 190.3-92.88 256-196.9z" fill="#3086cd"/><path d="m472 428v-148h-32v148a28 28 0 0 1 -28 28 28 28 0 0 1 -28-28v-124a48 48 0 0 0 -48-48h-16v32h16a16 16 0 0 1 16 16v124a60 60 0 0 0 60 60 60 60 0 0 0 60-60z" fill="#4d5e78"/><path d="m440 280h32v-104a16 16 0 0 0 -4.686-11.314l-11.314-11.314v-49.372h-49.372l-19.314-19.314a16 16 0 0 0 -11.314-4.686h-24v32h16s.051 22.906.064 48h49.309l22.627 22.627z" fill="#348fd9"/><path d="m440 208h-40v-48h-31.936c.007 13.8 0 44.265-.027 55.944a23.994 23.994 0 0 0 24 24.056h47.963z" fill="#e0e0de"/><path d="m320 80h32v32h-32z" fill="#e0e0de"/><path d="m104 72h176v128h-176z" fill="#4db7e5"/><g fill="#3b9dc7"><path d="m136 128h16v16h-16z"/><path d="m167.998 128h16v16h-16z"/><path d="m200 128h16v16h-16z"/><path d="m231.998 128h16v16h-16z"/></g><path d="m192 376a35.67 35.67 0 0 1 -32.32-50.75l32.32-69.25 26.53 56.83 5.79 12.42a35.669 35.669 0 0 1 -32.32 50.75z" fill="#ffb531"/><path d="m104 72h176v16h-176z" fill="#4aafdb"/><path d="m312 424h40v64h-40z" fill="#d6d6d4"/><path d="m368 160h32v16h-32z" fill="#d6d6d4"/><path d="m320 256h16v32h-16z" fill="#435269"/><path d="m192 376a35.289 35.289 0 0 1 -28.35-14.03 241.271 241.271 0 0 0 54.88-49.14l5.79 12.42a35.669 35.669 0 0 1 -32.32 50.75z" fill="#fcac1f"/></g></svg>
@stop





@section('content')

<h1 class="text-center  font-weight-bold mb-5 display-4 fst-italic" id="titulo" style="color:rgb(50, 241, 232)">REGISTRO RENDIMIENTO VEHICULOS</h1>


<livewire:scripts>
@livewire('rendimiento-component')







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
      $('#rendi').DataTable();
  </script>



@stop
