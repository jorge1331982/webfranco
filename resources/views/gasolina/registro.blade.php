@extends('adminlte::page')

@section('title', 'Site-Gasolina')


@section('content_header')


@stop





@section('content')

<h1 class="text-center text-orange font-weight-bold mb-5 display-4 fst-italic" id="titulo" style=color:rgb(243, 184, 75)>REGISTRO VEHICULOS</h1>


<livewire:scripts>
@livewire('gasolina-component')







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
      $('#gas').DataTable();
  </script>



@stop
