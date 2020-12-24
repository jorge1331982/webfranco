@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<div class="d-flex justify-content-end">
    <p class="text-white ml-2">Revisar graficos</p>
  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="40" height="40" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path xmlns="http://www.w3.org/2000/svg" d="m12 0c-6.617 0-12 5.383-12 12s5.383 12 12 12 12-5.383 12-12-5.383-12-12-12z" fill="#21f34c" data-original="#2196f3" style="" class=""/><path xmlns="http://www.w3.org/2000/svg" d="m12 0c-6.617 0-12 5.383-12 12s5.383 12 12 12z" fill="#5fd41d" data-original="#1d83d4" style="" class=""/><path xmlns="http://www.w3.org/2000/svg" d="m12 18.25v-3.25h-5.75c-.689 0-1.25-.561-1.25-1.25v-3.5c0-.689.561-1.25 1.25-1.25h5.75v-3.25c0-.66.795-.999 1.27-.541l6.5 6.25c.147.142.23.337.23.541s-.083.399-.23.541l-6.5 6.25c-.475.456-1.27.12-1.27-.541z" fill="#ffffff" data-original="#ffffff" style=""/><path xmlns="http://www.w3.org/2000/svg" d="m5 12h15c0 .204-.083.399-.23.541l-6.5 6.25c-.15.144-.334.209-.514.209-.385 0-.756-.298-.756-.75v-3.25h-5.75c-.689 0-1.25-.561-1.25-1.25z" fill="#dedede" data-original="#dedede" style=""/></g></svg>
</div>
@stop


@section('content')
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Cotizador', 'total'],
          @foreach($jus as $item)
              ['{{$item->asesor}}',{{$item->cotizacion}}],
          @endforeach()
        ]);

        var options = {
          title: 'Comparativo Cotizaciones'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

<script type="text/javascript">
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['asesor', ''],
        @foreach($her as $item)
              ['{{$item->vendedor}}',{{$item->precio}}],
          @endforeach()
      ]);

      var options = {
        title: 'Comparativo Ingreso de Ventas por Asesor',
        is3D: true,

      };

      var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
      chart.draw(data, options);
    }
  </script>

<script type="text/javascript">
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Task', 'Hours per Day'],
        @foreach($mer as $i)
              ['{{$i->aseso}}',{{$i->registro_id}}],
          @endforeach()
      ]);

      var options = {
        title: 'Comparativo de Porcentaje de Seguimientos por Asesor',
        is3D: true,

      };

      var chart = new google.visualization.PieChart(document.getElementById('piechart2_3d'));
      chart.draw(data, options);
    }
  </script>





  </head>
  <body>
      <div class="container">
          <h1 class="text-center mb-5 mt-4">Dashboard Graficos</h1>
      </div>
    <div class="row">
        <div class="col-md-4">
            <div  class="ml-2" id="piechart" style="width: 500px; height: 230px;"></div>
        </div>
        <div class="col-md-4">
            <div id="piechart_3d" style="width: 500px; height: 230px;"></div>
        </div>
        <div class="col-md-4">
           <div  class="ml-2" id="piechart2_3d" style="width: 500px; height: 230px;"></div>
        </div>
    </div>
  </body>
</html>


@stop

@section('css')


@stop

@section('js')







@stop
