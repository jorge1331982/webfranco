@extends('adminlte::page')

@section('title', 'Site-Rendimiento')


@section('content_header')


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
