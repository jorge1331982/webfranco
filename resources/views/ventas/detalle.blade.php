@extends('adminlte::page')

@section('title', 'Site-Admin')


@section('content_header')
<i class="fas fa-boxes text-success">Cotizaciones</i>



@stop

@section('content')
  <h5 class="text-center">Resumen de Cotizacion</h5>
  <div class="card">
  <div class="card-body">
<h1 class="text-center text-success display-1">{{$nota->producto}}</h1>
<hr />

<div class="d-flex justify-content-start ml-5">

    <img src="{{asset('img/'.$nota->imagen)}}" alt="" width="500" >

    <ul style="color:black; margin-left:20px;">
        <li>{{$nota->fecha}}</li>
        <li>{{$nota->n_cliente}}</li>
        <li>{{$nota->correo}}</li>
        <li>{{$nota->telefono}}</li>
        <li>{{$nota->largo}}</li>
        <li>{{$nota->ancho}}</li>
        <li>{{$nota->alto}}</li>
        <li>{{$nota->observaciones}}</li>
        <li>{{$nota->estructura}}</li>
        <li>{{$nota->maderas}}</li>
        <li>{{$nota->puertas}}</li>
        <li>{{$nota->piso}}</li>
        <li>{{$nota->instalacion}}</li>
        <li>{{$nota->pintura}}</li>
        <li>{{$nota->asesor}}</li>
    </ul>
</div>
<div class="d-flex justify-content-center ">
    <div class="alert alert-primary" role="alert">
      Precio $ {{$nota->precio}}-MXN
      </div>
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






@stop
