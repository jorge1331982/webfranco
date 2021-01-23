@extends('adminlte::page')

@section('title', 'administracion-registro')


@section('content_header')
<a href="{{route('reg')}}"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="50" height="50" x="0" y="0" viewBox="0 0 497.25 497.25" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g>
    <g xmlns="http://www.w3.org/2000/svg">
        <g id="undo">
            <path d="M248.625,89.25V0l-127.5,127.5l127.5,127.5V140.25c84.15,0,153,68.85,153,153c0,84.15-68.85,153-153,153    c-84.15,0-153-68.85-153-153h-51c0,112.2,91.8,204,204,204s204-91.8,204-204S360.825,89.25,248.625,89.25z" fill="#e2e910" data-original="#000000" style="" class=""/>
        </g>
    </g>
    <g xmlns="http://www.w3.org/2000/svg">
    </g>
    <g xmlns="http://www.w3.org/2000/svg">
    </g>
    <g xmlns="http://www.w3.org/2000/svg">
    </g>
    <g xmlns="http://www.w3.org/2000/svg">
    </g>
    <g xmlns="http://www.w3.org/2000/svg">
    </g>
    <g xmlns="http://www.w3.org/2000/svg">
    </g>
    <g xmlns="http://www.w3.org/2000/svg">
    </g>
    <g xmlns="http://www.w3.org/2000/svg">
    </g>
    <g xmlns="http://www.w3.org/2000/svg">
    </g>
    <g xmlns="http://www.w3.org/2000/svg">
    </g>
    <g xmlns="http://www.w3.org/2000/svg">
    </g>
    <g xmlns="http://www.w3.org/2000/svg">
    </g>
    <g xmlns="http://www.w3.org/2000/svg">
    </g>
    <g xmlns="http://www.w3.org/2000/svg">
    </g>
    <g xmlns="http://www.w3.org/2000/svg">
    </g>
    </g></svg>Regreso</a>

@stop





@section('content')

<h1 class="text-center text-warning font-weight-bold mb-5 display-4 fst-italic" id="titulo">REGISTRO DE  PAGO ADMINISTRACION</h1>
 <div class="container">
    @if ( session('message') )
    <div class="alert alert-warning">{{ session('message') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </div>

@endif
    <form action="{{route('Rpago2')}}" method="POST">
        @csrf
        <div class="row">
            <div class="form-group col-md-6">
                <input type="date" placeholder="fecha de Registro" required class="form-control" name="fechaA">
            </div>
            <div class="form-group col-md-6">
                <input type="text" placeholder="Nombre del Asesor" required class="form-control" name="asesor">
            </div>
            <div class="form-group col-md-4">
                <input type="text" placeholder="Orden de Produccion" required class="form-control" name="ordenP">
            </div>

            <div class="form-group col-md-4">
                <select name="formaP" class="form-control" required>
                    <option>Seleccione Forma de Pago</option>
                    <option>Transferencia</option>
                    <option>Efectivo</option>
                    <option>Deposito / Efectivo</option>
                    <option>Cheque</option>
                    <option>Tarjeta Credito</option>
                    <option>Tarjeta Debito</option>
                    <option>Por Definir</option>
                </select>
            </div>

            <div class="form-group col-md-4">
                <select name="metodoP" class="form-control" required>
                    <option>Seleccione Metodo de Pago</option>
                    <option>PPD</option>
                    <option>PUE</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <input type="number" placeholder="Precio Neto" required class="form-control" name="precioN">
            </div>
            <div class="form-group col-md-6">
                <input type="text" placeholder="Serie Unidad"  class="form-control" name="serieU">
            </div>
            <div class="form-group col-md-6">
                <input type="text" placeholder="Serie Caja"  class="form-control" name="serieC">
            </div>
            <div class="form-group col-md-6">
                <select name="facturaR" class="form-control" required>
                    <option>Seleccione Factura /Remision</option>
                    <option>Factura</option>
                    <option>Remision</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <select name="dato_id" class="form-control" required>
                    <option>Seleccione Cliente</option>
                     @foreach($tor as $d)
                    <option value="{{$d->id}}">{{$d->nombreC}}</option>
                     @endforeach
                </select>
            </div>
            <div class="form-group col-md-6">
                <input type="text" placeholder="Ingrese Producto"  class="form-control" name="producto">
            </div>

        </div>
        <div  class="d-flex justify-content-center">
            <button class="btn btn-warning btn-block mt-2 mb-5 " type="submit"><svg  id="Capa_1" enable-background="new 0 0 512 512" height="30" viewBox="0 0 512 512" width="30" xmlns="http://www.w3.org/2000/svg"><g><path d="m256 0c-140.7 0-256 115.3-256 256s115.3 256 256 256 256-115.3 256-256-115.3-256-256-256z" fill="#f3f5f9"/><path d="m512 256c0 140.7-115.3 256-256 256v-512c140.7 0 256 115.3 256 256z" fill="#e1e6f0"/><circle cx="256" cy="256" fill="#a0e65c" r="226"/><path d="m482 256c0 124.2-101.8 226-226 226v-452c124.2 0 226 101.8 226 226z" fill="#79cc52"/><path d="m372.675 196.747-42.437-42.422c-5.859-5.859-15.352-5.859-21.211 0l-53.027 53.037-30 30.005-23.042-23.042c-5.859-5.859-15.352-5.859-21.211 0l-42.422 42.422c-5.859 5.859-5.859 15.352 0 21.211l76.069 76.069c2.93 2.93 6.768 4.395 10.605 4.395s7.676-1.465 10.605-4.395l19.396-19.394 116.675-116.675c2.813-2.813 4.395-6.621 4.395-10.605s-1.583-7.793-4.395-10.606z" fill="#f3f5f9"/><path d="m377.069 207.353c0-3.984-1.582-7.793-4.395-10.605l-42.437-42.422c-5.859-5.859-15.352-5.859-21.211 0l-53.026 53.036v127.271l116.675-116.675c2.812-2.812 4.394-6.621 4.394-10.605z" fill="#e1e6f0"/></g></svg>Guardar</button>
           </div>
    </form>
</div>

<table id="jako" class="table table-striped " style="width:100%">
    <thead class="thead-dark">
        <tr>
            <th>FECHA</th>
            <th>Orden Produccion</th>
            <th>CLIENTE</th>
            <th>PRECIO NETO</th>
            <th>FORMA PAGO</th>
            <th>METODO PAGO</th>
            <th>ASESOR</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($fro as $l)

        <tr>
            <td>{{$l->fechaA}}</td>
            <td>{{$l->ordenP}}</td>
            <td>{{$l->nombreC}}</td>
            <td>{{$l->precioN}}</td>
            <td>{{$l->formaP}}</td>
            <td>{{$l->metodoP}}</td>
            <td>{{$l->asesor}}</td>

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

    $('#jako').DataTable();

  </script>



@stop
