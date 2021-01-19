@extends('adminlte::page')

@section('title', 'Site-Admin')


@section('content_header')
<svg id="Capa_1" enable-background="new 0 0 512 512" height=50 viewBox="0 0 512 512" width="50" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="259" x2="259" y1="512" y2="0"><stop offset="0" stop-color="#fd5900"/><stop offset="1" stop-color="#ffde00"/></linearGradient><linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="256" x2="256" y1="449" y2="30"><stop offset="0" stop-color="#ffe59a"/><stop offset="1" stop-color="#ffffd5"/></linearGradient><g><g><g><path d="m384.04 150 12.46-13-36.529-17-48.137-60 12.46-13-36.529-17-19.565-24.387c-2.847-3.548-7.151-5.613-11.7-5.613s-8.853 2.065-11.7 5.613l-19.565 24.387-17.735 10.888-6.334 19.112-48.137 60-22.639 17-1.43 13-4.16 5.185c-2.136 2.662-3.3 5.974-3.3 9.387v332.428c0 8.284 6.716 15 15 15h240c8.284 0 15-6.716 15-15v-332.428c0-3.413-1.164-6.725-3.3-9.387z" fill="url(#SVGID_1_)"/></g></g><g><g><path d="m390.5 30h-102.735l24.069 30h78.666c16.542 0 30 13.458 30 30s-13.458 30-30 30h-30.529l24.069 30h6.46c33.084 0 60-26.916 60-60s-26.916-60-60-60zm-150 135.146c0 8.284 6.716 15 15 15s15-6.716 15-15v-60c0-8.284-6.716-15-15-15s-15 6.716-15 15v14.854h-119c-16.542 0-30-13.458-30-30s13.458-30 30-30h79.666l24.069-30h-103.735c-33.084 0-60 26.916-60 60s26.916 60 60 60h119zm17 133.854c8.271 0 15 6.729 15 15 0 8.284 6.716 15 15 15s15-6.716 15-15c0-19.555-12.541-36.228-30-42.42v-17.58c0-8.284-6.716-15-15-15s-15 6.716-15 15v17.58c-17.459 6.192-30 22.865-30 42.42 0 24.813 20.187 45 45 45 8.271 0 15 6.729 15 15s-6.729 15-15 15-15-6.729-15-15c0-8.284-6.716-15-15-15s-15 6.716-15 15c0 19.555 12.541 36.228 30 42.42v17.58c0 8.284 6.716 15 15 15s15-6.716 15-15v-17.58c17.459-6.192 30-22.865 30-42.42 0-24.813-20.187-45-45-45-8.271 0-15-6.729-15-15s6.729-15 15-15z" fill="url(#SVGID_2_)"/></g></g></g></svg>

<style>
  .linea
{
    display: inline-block;
}
</style>


@stop

@section('content')

         <div class="container">
        <h1 class="text-center text-orange mb-5 display-5">COTIZACION CAJA SECAS</h1>
       <!--formulario-->
       @if ( session('mensaje') )
       <div class="alert alert-success">{{ session('mensaje') }}
       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
       <span aria-hidden="true">&times;</span>
       </div>

    @endif


        <form action="{{route('salida')}}" enctype="multipart/form-data" method="POST" >
           @csrf
           <form>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="inputEmail41">Fecha</label>
                <input type="date" class="form-control" id="inputEmail41" name="fecha" required>
              </div>
              <div class="form-group col-md-4">
                <label for="inputPassword42">Folio</label>
                <input type="text" class="form-control" id="inputPassword42" name="folio" required>
              </div>
              <div class="form-group col-md-4">
                <label for="inputPassword333">Tipo Unidad</label>
                <select id="inputState333" class="form-control" name="tipo" required>
                  <option selected>Selecciona uno ....</option>
                  <option>1.5 ton</option>
                  <option>3.5 ton</option>
                  <option>Camion</option>
                </select>
              </div>
              <div class="form-group col-md-4">
                <label for="inputPassword43">Nombre Cliente</label>
                <input type="text" class="form-control" id="inputPassword43"  name="n_cliente" required>
              </div>
              <div class="form-group col-md-4">
                <label for="inputPassword44">Correo</label>
                <input type="text" class="form-control" id="inputPassword44"  name="correo" required>
              </div>
              <div class="form-group col-md-4">
                <label for="inputPassword45">Telefono</label>
                <input type="text" class="form-control" id="inputPassword45"  name="telefono" required>
              </div>
              <div class="form-group col-md-4">
                <label for="inputPassword444">Producto Cotizado</label>
                <select id="inputState444" class="form-control" name="producto" required>
                  <option selected>Caja Seca</option>
                  <option>Caja Seca con Copete</option>
                </select>
              </div>
              <div class="form-group col-md-4">
                <label for="inputPassword46">Imagen</label>
                <input type="file" class="form-control" id="inputPassword46"  name="imagen" required>
              </div>
              <div class="form-group col-md-4">
                <label for="inputPassword47">Asesor</label>
                <input type="asesor" class="form-control" id="inputPassword47"  name="asesor" required>
              </div>
              <div class="form-group col-md-4">
                <label for="inputPassword48">Largo (cm)</label>
                <input type="text" class="form-control" id="inputPassword48"  name="largo" required>
              </div>
              <div class="form-group col-md-4">
                <label for="inputPassword49">Ancho (cm)</label>
                <input type="text" class="form-control" id="inputPassword49"  name="ancho" required>
              </div>
              <div class="form-group col-md-4">
                <label for="inputPassword411">Alto(cm)</label>
                <input type="text" class="form-control" id="inputPassword411"  name="alto" required>
              </div>
              <div class="form-group col-md-4">
                <label for="copete">Copete (cm)</label>
                <input type="text" class="form-control" id="copete"  name="copete" required>
              </div>
              <div class="form-group col-md-4">
                <label for="inputPassword422">Sugeridos:</label>
                <input type="text" class="form-control" id="inputPassword422"  name="sugeridos" required>
              </div>
              <div class="form-group col-md-4">
                <label for="estructu">Calibres ( solo numero)</label>
                <input type="number" class="form-control" id="estructu"  name="calibres" required>
              </div>
              <div class="form-group col-md-4">
                <label for="madera">Caracteristicas Inter y Ext: (solo numero)</label>
                <input type="number" class="form-control" id="estructu"  name="intandext" required>
              </div>
              <div class="form-group col-md-4">
                <label for="puerta">Techos: (solo numero)</label>
                <input type="number" class="form-control" id="puerta"  name="techo" required>
              </div>

              <div class="form-group col-md-4">
                <label for="insta">Accesorios:</label>
                <input type="text" class="form-control" id="puerta"  name="accesorios" required>
              </div>

              <div class="form-group col-md-12">
                <label for="inputPassword4889">Precio (solo numero)</label>
                <input type="Number" class="form-control" id="inputPassword4889"  name="precio" required>
              </div>
            </div>

            <div  class="d-flex justify-content-center">
              <button class="btn btn-success btn-block my-2" type="submit"><svg id="#" enable-background="new 0 0 512 512" height="30" viewBox="0 0 512 512" width="30" xmlns="http://www.w3.org/2000/svg"><g><path d="m256 0c-140.7 0-256 115.3-256 256s115.3 256 256 256 256-115.3 256-256-115.3-256-256-256z" fill="#f3f5f9"/><path d="m512 256c0 140.7-115.3 256-256 256v-512c140.7 0 256 115.3 256 256z" fill="#e1e6f0"/><circle cx="256" cy="256" fill="#a0e65c" r="226"/><path d="m482 256c0 124.2-101.8 226-226 226v-452c124.2 0 226 101.8 226 226z" fill="#79cc52"/><path d="m372.675 196.747-42.437-42.422c-5.859-5.859-15.352-5.859-21.211 0l-53.027 53.037-30 30.005-23.042-23.042c-5.859-5.859-15.352-5.859-21.211 0l-42.422 42.422c-5.859 5.859-5.859 15.352 0 21.211l76.069 76.069c2.93 2.93 6.768 4.395 10.605 4.395s7.676-1.465 10.605-4.395l19.396-19.394 116.675-116.675c2.813-2.813 4.395-6.621 4.395-10.605s-1.583-7.793-4.395-10.606z" fill="#f3f5f9"/><path d="m377.069 207.353c0-3.984-1.582-7.793-4.395-10.605l-42.437-42.422c-5.859-5.859-15.352-5.859-21.211 0l-53.026 53.036v127.271l116.675-116.675c2.812-2.812 4.394-6.621 4.394-10.605z" fill="#e1e6f0"/></g></svg>Guardar</button>
              </div>



        </form>
    </div>








<!--TABLA DATOS-->

<table id="tabla55" class="table table-striped table-bordered mt-5 " style="width:100%">
  <thead class="thead-dark">
    <tr>

      <th scope="col">FECHA </th>
      <th scope="col">FOLIO</th>
      <th scope="col">NOMBRE CLIENTE</th>
      <th scope="col">TELEFONO</th>
      <th scope="col">PRODUCTO</th>
      <th scope="col">PRECIO</th>
      <th scope="col">ASESOR</th>
      <th scope="col">IMAGEN</th>
      <th scope="col">OPCIONES</th>

    </tr>
  </thead>
  <tbody>
   @foreach($fer as $item)
    <tr>
      <td  scope="row"> {{$item->fecha}} </td>
      <td scope="row">{{$item->folio}}</td>
      <td scope="row">{{$item->n_cliente}}</td>
      <td scope="row">{{$item->telefono}}</td>
      <td scope="row">{{$item->producto}}</td>
      <td scope="row">{{$item->precio}}</td>
      <td scope="row">{{$item->asesor}}</td>
      <td><img src="img/{{$item->imagen}}" alt="NO SE MUESTRA ARCHIVO NO COMPATIBLENO ES JPG" width="80"></td>
      <td><a href="{{route('detalle',$item) }}" class="btn btn-danger linea"><svg id="Layer_1" enable-background="new 0 0 512 512" height="40" viewBox="0 0 512 512" width="40" xmlns="http://www.w3.org/2000/svg"><g><g id="XMLID_571_"><g><g id="XMLID_1009_"><g id="XMLID_1010_"><g id="XMLID_1011_"><g id="XMLID_1012_"><g id="XMLID_1013_"><g id="XMLID_1014_"><g id="XMLID_1015_"><g id="XMLID_1016_"><g id="XMLID_1017_"><g id="XMLID_1018_"><g id="XMLID_1019_"><g id="XMLID_1020_"><g id="XMLID_1021_"><g id="XMLID_1022_"><circle cx="256" cy="256" fill="#238cf8" r="256"/></g></g></g></g></g></g></g></g></g></g></g></g></g></g></g></g><path d="m511.97 258.345-205.96-205.96-231.464 308.434 27.917 28.213 11.802 50.741 58.313 58.313c26.15 9.01 54.212 13.914 83.422 13.914 140.601 0 254.709-113.352 255.97-253.655z" fill="#0768dd"/><g><g><path d="m95.751 103.679v296.645c0 28.329 22.965 51.294 51.294 51.294h217.906c28.329 0 51.294-22.965 51.294-51.294v-237.704l-110.235-110.235h-158.965c-28.329 0-51.294 22.965-51.294 51.294z" fill="#fff"/><path d="m416.249 162.617v237.707c0 28.328-22.964 51.292-51.292 51.292h-108.96v-399.234h50.017z" fill="#eae1dc"/><path d="m416.245 162.62-110.235-110.235v110.235z" fill="#cec5c0"/></g><path d="m417.391 367.51h-322.782c-18.459 0-33.424-14.964-33.424-33.424v-87.018c0-18.459 14.964-33.424 33.424-33.424h322.782c18.459 0 33.424 14.964 33.424 33.424v87.018c0 18.46-14.965 33.424-33.424 33.424z" fill="#ff807d"/><path d="m450.81 247.07v87.02c0 18.46-14.96 33.42-33.42 33.42h-161.39v-153.87h161.39c18.46 0 33.42 14.97 33.42 33.43z" fill="#fc3e53"/><g><path d="m342.208 269.444v-15h-38.21v28.091 15 29.176h15v-29.176h21.366v-15h-21.366v-13.091z" fill="#eae1dc"/><path d="m256.433 255.086h-23.37v.099h-.027l.041 7.551c.003 1.746.041 21.678.041 27.78 0 7.783.072 28.08.072 28.08l.026 7.501 7.502-.028c.479-.002 11.789-.045 16.309-.125 17.102-.299 29.514-15.173 29.514-35.367 0-21.228-12.1-35.491-30.108-35.491zm.333 55.861c-1.949.034-5.288.062-8.424.082l-.224-40.943h8.315c14.019 0 15.108 15.685 15.108 20.492 0 13.892-7.421 20.241-14.775 20.369z" fill="#fff"/><path d="m286.541 290.578c0-21.229-12.1-35.492-30.108-35.492h-.433v15h.433c14.019 0 15.108 15.685 15.108 20.492 0 13.893-7.421 20.241-14.775 20.369-.235.004-.493.008-.766.012v15.002c.37-.005.716-.01 1.027-.016 17.102-.299 29.514-15.173 29.514-35.367z" fill="#eae1dc"/><path d="m193.355 254.232h-8.563-7.5-7.5v72.69h15v-25.099c3.154-.016 6.566-.031 8.563-.031 13.288 0 24.099-10.668 24.099-23.78 0-13.111-10.81-23.78-24.099-23.78zm0 32.561c-1.983 0-5.355.014-8.493.03-.016-3.249-.03-6.77-.03-8.81 0-1.732-.009-5.376-.018-8.78h8.541c4.932 0 9.099 4.021 9.099 8.78s-4.167 8.78-9.099 8.78z" fill="#fff"/></g></g></g></svg>Descargar</a>
     <a href="{{route('detalle2',$item)}}" class="btn btn-warning linea"><svg id="Capa_1" enable-background="new 0 0 510 510" height="40" viewBox="0 0 510 510" width="40" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="273.323" x2="273.323" y1="16.526" y2="79.361"><stop offset="0" stop-color="#6b0"/><stop offset="1" stop-color="#0b799d"/></linearGradient><linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="228.596" x2="228.596" y1="16.526" y2="79.361"><stop offset="0" stop-color="#90cc1c"/><stop offset="1" stop-color="#6b0"/></linearGradient><linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="231.141" x2="414.441" y1="20.373" y2="591.332"><stop offset="0" stop-color="#b9dd39"/><stop offset="1" stop-color="#0b799d"/></linearGradient><linearGradient id="lg1"><stop offset="0" stop-color="#fdbf00"/><stop offset="1" stop-color="#ff9100"/></linearGradient><linearGradient id="SVGID_4_" gradientUnits="userSpaceOnUse" x1="372.569" x2="386.917" xlink:href="#lg1" y1="109.346" y2="120.277"/><linearGradient id="SVGID_5_" gradientUnits="userSpaceOnUse" x1="412.608" x2="426.955" xlink:href="#lg1" y1="109.346" y2="120.277"/><linearGradient id="SVGID_6_" gradientUnits="userSpaceOnUse" x1="452.646" x2="466.994" xlink:href="#lg1" y1="109.346" y2="120.277"/><linearGradient id="lg2"><stop offset="0" stop-color="#0b799d" stop-opacity="0"/><stop offset=".3645" stop-color="#096380" stop-opacity=".365"/><stop offset=".76" stop-color="#084f67" stop-opacity=".76"/><stop offset="1" stop-color="#07485e"/></linearGradient><linearGradient id="SVGID_7_" gradientUnits="userSpaceOnUse" x1="292.049" x2="445.266" xlink:href="#lg2" y1="231.758" y2="-163.566"/><linearGradient id="SVGID_8_" gradientUnits="userSpaceOnUse" x1="298.875" x2="298.875" xlink:href="#lg2" y1="341.527" y2="424.184"/><linearGradient id="SVGID_9_" gradientUnits="userSpaceOnUse" x1="229.448" x2="229.448" y1="74.872" y2="137.708"><stop offset="0" stop-color="#0095ff"/><stop offset="1" stop-color="#0b799d"/></linearGradient><linearGradient id="SVGID_10_" gradientUnits="userSpaceOnUse" x1="184.721" x2="184.721" y1="74.872" y2="137.708"><stop offset="0" stop-color="#48b2e3"/><stop offset="1" stop-color="#0095ff"/></linearGradient><linearGradient id="SVGID_11_" gradientUnits="userSpaceOnUse" x1="79.066" x2="341.967" y1="113.77" y2="376.671"><stop offset="0" stop-color="#76e2f8"/><stop offset="1" stop-color="#48b2e3"/></linearGradient><linearGradient id="lg3"><stop offset="0" stop-color="#edf5ff"/><stop offset="1" stop-color="#d5e8fe"/></linearGradient><linearGradient id="SVGID_12_" gradientUnits="userSpaceOnUse" x1="328.694" x2="343.042" xlink:href="#lg3" y1="167.692" y2="178.624"/><linearGradient id="SVGID_13_" gradientUnits="userSpaceOnUse" x1="368.733" x2="383.08" xlink:href="#lg3" y1="167.692" y2="178.624"/><linearGradient id="SVGID_14_" gradientUnits="userSpaceOnUse" x1="408.771" x2="423.119" xlink:href="#lg3" y1="167.692" y2="178.624"/><linearGradient id="lg4"><stop offset="0" stop-color="#b5dbff" stop-opacity="0"/><stop offset=".1734" stop-color="#8fc5e9" stop-opacity=".173"/><stop offset=".4541" stop-color="#56a4c8" stop-opacity=".454"/><stop offset=".6955" stop-color="#2d8db1" stop-opacity=".696"/><stop offset=".8853" stop-color="#147ea2" stop-opacity=".885"/><stop offset="1" stop-color="#0b799d"/></linearGradient><linearGradient id="SVGID_15_" gradientUnits="userSpaceOnUse" x1="250.162" x2="258.742" xlink:href="#lg4" y1="455.732" y2="124.233"/><linearGradient id="SVGID_16_" gradientUnits="userSpaceOnUse" x1="255" x2="255" xlink:href="#lg4" y1="399.874" y2="482.53"/><linearGradient id="SVGID_17_" gradientUnits="userSpaceOnUse" x1="185.573" x2="185.573" y1="133.219" y2="196.054"><stop offset="0" stop-color="#ff9100"/><stop offset="1" stop-color="#e63950"/></linearGradient><linearGradient id="SVGID_18_" gradientUnits="userSpaceOnUse" x1="140.846" x2="140.846" xlink:href="#lg1" y1="133.219" y2="196.054"/><linearGradient id="SVGID_19_" gradientUnits="userSpaceOnUse" x1="35.191" x2="298.092" y1="172.116" y2="435.018"><stop offset="0" stop-color="#ffda2d"/><stop offset="1" stop-color="#fdbf00"/></linearGradient><linearGradient id="lg5"><stop offset="0" stop-color="#ff637b"/><stop offset="1" stop-color="#e63950"/></linearGradient><linearGradient id="SVGID_20_" gradientUnits="userSpaceOnUse" x1="284.82" x2="299.167" xlink:href="#lg5" y1="226.039" y2="236.97"/><linearGradient id="SVGID_21_" gradientUnits="userSpaceOnUse" x1="324.858" x2="339.205" xlink:href="#lg5" y1="226.039" y2="236.97"/><linearGradient id="SVGID_22_" gradientUnits="userSpaceOnUse" x1="364.896" x2="379.244" xlink:href="#lg5" y1="226.039" y2="236.97"/><linearGradient id="SVGID_23_" gradientUnits="userSpaceOnUse" x1="211.125" x2="211.125" y1="458.22" y2="540.877"><stop offset="0" stop-color="#ff9100" stop-opacity="0"/><stop offset="1" stop-color="#ff9100"/></linearGradient><g><g><path d="m360.357 79.322h-174.069v-49.576c0-16.428 13.318-29.746 29.746-29.746h114.577c16.428 0 29.746 13.318 29.746 29.746z" fill="url(#SVGID_1_)"/><path d="m315.63 79.322h-174.069v-49.576c0-16.428 13.318-29.746 29.746-29.746h114.577c16.428 0 29.746 13.318 29.746 29.746z" fill="url(#SVGID_2_)"/><path d="m268.257 56.462v-26.716c0-16.428-13.318-29.746-29.746-29.746h-114.577c-16.428 0-29.746 13.318-29.746 29.746v321.184c0 23.404 18.973 42.377 42.377 42.377h324.619c23.404 0 42.377-18.973 42.377-42.377v-239.146c0-23.404-18.973-42.377-42.377-42.377h-179.982c-7.149 0-12.945-5.796-12.945-12.945z" fill="url(#SVGID_3_)"/><g><path d="m381.161 127.705h-10.206c-5.853 0-10.598-4.745-10.598-10.598v-10.206c0-5.853 4.745-10.598 10.598-10.598h10.206c5.853 0 10.598 4.745 10.598 10.598v10.206c.001 5.853-4.744 10.598-10.598 10.598z" fill="url(#SVGID_4_)"/><path d="m421.2 127.705h-10.206c-5.853 0-10.598-4.745-10.598-10.598v-10.206c0-5.853 4.745-10.598 10.598-10.598h10.206c5.853 0 10.598 4.745 10.598 10.598v10.206c0 5.853-4.745 10.598-10.598 10.598z" fill="url(#SVGID_5_)"/><path d="m461.238 127.705h-10.206c-5.853 0-10.598-4.745-10.598-10.598v-10.206c0-5.853 4.745-10.598 10.598-10.598h10.206c5.853 0 10.598 4.745 10.598 10.598v10.206c.001 5.853-4.744 10.598-10.598 10.598z" fill="url(#SVGID_6_)"/></g><path d="m461.184 393.307c23.404 0 42.377-18.973 42.377-42.377v-154.328l-54.359-54.359c-7.768-8.876-19.172-14.49-31.893-14.49h-49.703l-57.732-58.347h-28.673-187.013v281.075c0 23.651 19.173 42.824 42.824 42.824h324.172z" fill="url(#SVGID_7_)"/><path d="m94.188 304.069v46.861c0 23.404 18.973 42.377 42.377 42.377h324.619c23.404 0 42.377-18.973 42.377-42.377v-46.861z" fill="url(#SVGID_8_)"/></g><g><path d="m316.482 137.669h-174.068v-49.576c0-16.428 13.318-29.746 29.746-29.746h114.577c16.428 0 29.746 13.318 29.746 29.746v49.576z" fill="url(#SVGID_9_)"/><path d="m271.755 137.669h-174.068v-49.576c0-16.428 13.318-29.746 29.746-29.746h114.577c16.428 0 29.746 13.318 29.746 29.746v49.576z" fill="url(#SVGID_10_)"/><path d="m224.382 114.809v-26.716c0-16.428-13.318-29.746-29.746-29.746h-114.577c-16.428 0-29.746 13.318-29.746 29.746v321.184c0 23.404 18.973 42.377 42.377 42.377h324.619c23.404 0 42.377-18.973 42.377-42.377v-239.146c0-23.404-18.973-42.377-42.377-42.377h-179.982c-7.149 0-12.945-5.796-12.945-12.945z" fill="url(#SVGID_11_)"/><g><path d="m337.286 186.052h-10.206c-5.853 0-10.598-4.745-10.598-10.598v-10.206c0-5.853 4.745-10.598 10.598-10.598h10.206c5.853 0 10.598 4.745 10.598 10.598v10.206c.001 5.853-4.744 10.598-10.598 10.598z" fill="url(#SVGID_12_)"/><path d="m377.325 186.052h-10.206c-5.853 0-10.598-4.745-10.598-10.598v-10.206c0-5.853 4.745-10.598 10.598-10.598h10.206c5.853 0 10.598 4.745 10.598 10.598v10.206c0 5.853-4.745 10.598-10.598 10.598z" fill="url(#SVGID_13_)"/><path d="m417.363 186.052h-10.206c-5.853 0-10.598-4.745-10.598-10.598v-10.206c0-5.853 4.745-10.598 10.598-10.598h10.206c5.853 0 10.598 4.745 10.598 10.598v10.206c.001 5.853-4.744 10.598-10.598 10.598z" fill="url(#SVGID_14_)"/></g><path d="m417.309 451.653c23.404 0 42.377-18.973 42.377-42.377v-154.327l-54.359-54.359c-7.768-8.876-19.172-14.49-31.893-14.49h-49.703l-57.731-58.346h-28.673-187.013v281.075c0 23.651 19.173 42.824 42.824 42.824z" fill="url(#SVGID_15_)"/><path d="m50.314 362.416v46.861c0 23.404 18.973 42.377 42.377 42.377h324.619c23.404 0 42.377-18.973 42.377-42.377v-46.861z" fill="url(#SVGID_16_)"/></g><g><path d="m272.607 196.016h-174.068v-49.576c0-16.428 13.318-29.746 29.746-29.746h114.577c16.428 0 29.746 13.318 29.746 29.746v49.576z" fill="url(#SVGID_17_)"/><path d="m227.88 196.016h-174.068v-49.576c0-16.428 13.318-29.746 29.746-29.746h114.577c16.428 0 29.746 13.318 29.746 29.746v49.576z" fill="url(#SVGID_18_)"/><path d="m180.507 173.155v-26.716c0-16.428-13.318-29.746-29.746-29.746h-114.576c-16.428 0-29.746 13.318-29.746 29.746v321.184c0 23.404 18.972 42.377 42.377 42.377h324.619c23.404 0 42.377-18.973 42.377-42.377v-239.146c0-23.404-18.973-42.377-42.377-42.377h-179.983c-7.149 0-12.945-5.795-12.945-12.945z" fill="url(#SVGID_19_)"/><g><path d="m293.411 244.399h-10.206c-5.853 0-10.598-4.745-10.598-10.598v-10.206c0-5.853 4.745-10.598 10.598-10.598h10.206c5.853 0 10.598 4.745 10.598 10.598v10.205c.001 5.853-4.744 10.599-10.598 10.599z" fill="url(#SVGID_20_)"/><path d="m333.45 244.399h-10.206c-5.853 0-10.598-4.745-10.598-10.598v-10.206c0-5.853 4.745-10.598 10.598-10.598h10.206c5.853 0 10.598 4.745 10.598 10.598v10.205c0 5.853-4.745 10.599-10.598 10.599z" fill="url(#SVGID_21_)"/><path d="m373.488 244.399h-10.206c-5.853 0-10.598-4.745-10.598-10.598v-10.206c0-5.853 4.745-10.598 10.598-10.598h10.206c5.853 0 10.598 4.745 10.598 10.598v10.205c.001 5.853-4.744 10.599-10.598 10.599z" fill="url(#SVGID_22_)"/></g><path d="m6.439 420.762v46.861c0 23.404 18.972 42.377 42.377 42.377h324.619c23.404 0 42.377-18.973 42.377-42.377v-46.861z" fill="url(#SVGID_23_)"/></g></g></svg>REVISION</a></td>
    </tr>
    @endforeach
  </tbody>

</table>


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
  $(document).ready( function () {
  $('#tabla55').DataTable();
} );
</script>





@stop
