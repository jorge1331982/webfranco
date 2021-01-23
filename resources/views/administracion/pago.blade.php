@extends('adminlte::page')

@section('title', 'pagos-admin')


@section('content_header')
  <a href="{{route('reg')}}"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="60" height="60" x="0" y="0" viewBox="0 0 511 511.99978" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path xmlns="http://www.w3.org/2000/svg" d="m235.792969 347.265625c3.902343-3.910156 3.902343-10.238281 0-14.148437-3.90625-3.898438-10.234375-3.898438-14.144531 0-3.898438 3.910156-3.898438 10.238281 0 14.148437 3.910156 3.898437 10.238281 3.898437 14.144531 0zm0 0" fill="#00fb3f" data-original="#000000" style="" class=""/><path xmlns="http://www.w3.org/2000/svg" d="m188.449219 109.96875c0 60.636719 49.332031 109.972656 109.96875 109.972656s109.96875-49.335937 109.96875-109.972656-49.332031-109.96875-109.96875-109.96875-109.96875 49.332031-109.96875 109.96875zm199.945312 0c0 49.613281-40.363281 89.976562-89.976562 89.976562s-89.976563-40.363281-89.976563-89.976562c0-49.609375 40.363282-89.972656 89.976563-89.972656s89.976562 40.363281 89.976562 89.972656zm0 0" fill="#00fb3f" data-original="#000000" style="" class=""/><path xmlns="http://www.w3.org/2000/svg" d="m115.652344 509.042969c3.875 3.90625 10.183594 3.949219 14.109375.082031l48.46875-47.75c8.234375-8.234375 10.738281-20.425781 7.117187-31.023438l10.425782-10.054687c5.613281-5.421875 13.003906-8.410156 20.816406-8.410156h132.902344c23.578124 0 45.863281-9.054688 62.757812-25.496094.695312-.675781-5.277344 6.359375 90.667969-108.3125 14.230469-16.835937 12.101562-42.117187-4.75-56.363281-16.746094-14.113282-41.832031-12.085938-56.101563 4.460937l-58.992187 60.632813c-7.449219-9.167969-18.808594-14.882813-31.082031-14.882813h-111.480469c-15.863281-6.636719-32.695313-9.996093-50.0625-9.996093-48.140625 0-90.175781 22.234374-112.734375 63.921874-9.503906-1.800781-19.527344 1.074219-26.738282 8.285157l-47.558593 47.699219c-3.882813 3.894531-3.890625 10.195312-.015625 14.101562zm74.792968-227.121094c15.3125 0 30.117188 3.082031 44.011719 9.160156 1.265625.554688 2.628907.839844 4.007813.839844h113.527344c10.839843 0 19.996093 8.839844 19.996093 19.992187 0 11.027344-8.96875 19.996094-19.996093 19.996094h-81.566407c-5.519531 0-9.996093 4.476563-9.996093 9.996094 0 5.523438 4.476562 9.996094 9.996093 9.996094h81.566407c22.050781 0 39.988281-17.9375 39.988281-39.988282 0-1.757812-.125-3.5-.351563-5.226562 57.066406-58.660156 65.113282-66.902344 65.457032-67.3125 7.125-8.410156 19.773437-9.476562 28.1875-2.382812 8.421874 7.121093 9.488281 19.761718 2.34375 28.21875l-89.667969 107.195312c-13.09375 12.570312-30.285157 19.488281-48.457031 19.488281h-132.902344c-13.023438 0-25.351563 4.980469-34.703125 14.015625l-8.496094 8.199219-78.320313-78.316406c18.304688-34.339844 52.652344-53.871094 95.375-53.871094zm-125.320312 66.34375c3.296875-3.296875 8.359375-3.890625 12.378906-1.40625 1.730469 1.054687-3.238281-3.46875 86.589844 86.234375 3.996094 3.996094 3.78125 10.363281.054688 14.089844l-41.320313 40.707031-98.230469-98.980469zm0 0" fill="#00fb3f" data-original="#000000" style="" class=""/><path xmlns="http://www.w3.org/2000/svg" d="m286.421875 49.988281v11.714844c-11.636719 4.125-19.996094 15.238281-19.996094 28.273437 0 16.535157 13.453125 29.992188 29.992188 29.992188 5.511719 0 9.996093 4.484375 9.996093 9.996094 0 5.511718-4.484374 9.996094-9.996093 9.996094-4.269531 0-8.882813-2.683594-12.980469-7.5625-3.554688-4.226563-9.859375-4.769532-14.085938-1.21875-4.226562 3.554687-4.773437 9.859374-1.21875 14.085937 5.34375 6.355469 11.628907 10.785156 18.289063 13.019531v11.667969c0 5.523437 4.476563 9.996094 9.996094 9.996094s9.996093-4.472657 9.996093-9.996094v-11.714844c11.636719-4.128906 19.996094-15.242187 19.996094-28.273437 0-16.539063-13.453125-29.992188-29.992187-29.992188-5.511719 0-9.996094-4.484375-9.996094-9.996094 0-5.511718 4.484375-10 9.996094-10 3.542969 0 7.28125 1.808594 10.8125 5.226563 3.96875 3.839844 10.296875 3.734375 14.136719-.230469 3.839843-3.96875 3.734374-10.296875-.230469-14.136718-5.074219-4.910157-10.152344-7.6875-14.722657-9.203126v-11.644531c0-5.523437-4.476562-10-9.996093-10s-9.996094 4.476563-9.996094 10zm0 0" fill="#00fb3f" data-original="#000000" style="" class=""/></g></svg>Volver</a>

@stop





@section('content')

<h1 class="text-center font-weight-bold mb-5 display-4 fst-italic" id="titulo" style="color:rgb(13, 255, 13)">PAGOS -ABONOS  ADMINISTRACION</h1>






<div class="container">
    @if ( session('message') )

    <div class="alert alert-success">{{ session('message') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </div>

@endif
   <form action="{{route('abono')}}" method="POST">
       @csrf
       <div class="row">
           <div class="form-group col-md-6">
             <input type="date" placeholder="Ingrese Fecha" required class="form-control" name="fechaB">
           </div>
           <div class="form-group col-md-6">
            <input type="number" placeholder="Anticipo / Abono" required class="form-control" name="anticipo">
          </div>
          <div class="form-group col-md-6">
             <select name="razonsocial2" class="form-control">
                 <option>Seleccione Razon Social</option>
                 <option>JUAN PABLO FRANCO</option>
                 <option>CARROCERIAS FRANCO</option>
             </select>
          </div>
          <div class="form-group col-md-6">
            <select name="dato_id" class="form-control">
                <option>Seleccione Cliente</option>
                   @foreach($tro as $f)
                <option value="{{$f->id}}">{{$f->nombreC}}</option>
                   @endforeach
            </select>
         </div>
         <div class="form-group col-md-12">
            <select name="regi_id" class="form-control">
                <option>seleccione orden de Produccion</option>
                 @foreach($ros as $r)
                <option value="{{$r->id}}">{{$r->ordenP}}</option>
                 @endforeach
            </select>
         </div>

       </div>
       <div  class="d-flex justify-content-center">
        <button class="btn btn-success btn-block mt-2 mb-5 " type="submit"><svg  id="Capa_1" enable-background="new 0 0 512 512" height="30" viewBox="0 0 512 512" width="30" xmlns="http://www.w3.org/2000/svg"><g><path d="m256 0c-140.7 0-256 115.3-256 256s115.3 256 256 256 256-115.3 256-256-115.3-256-256-256z" fill="#f3f5f9"/><path d="m512 256c0 140.7-115.3 256-256 256v-512c140.7 0 256 115.3 256 256z" fill="#e1e6f0"/><circle cx="256" cy="256" fill="#a0e65c" r="226"/><path d="m482 256c0 124.2-101.8 226-226 226v-452c124.2 0 226 101.8 226 226z" fill="#79cc52"/><path d="m372.675 196.747-42.437-42.422c-5.859-5.859-15.352-5.859-21.211 0l-53.027 53.037-30 30.005-23.042-23.042c-5.859-5.859-15.352-5.859-21.211 0l-42.422 42.422c-5.859 5.859-5.859 15.352 0 21.211l76.069 76.069c2.93 2.93 6.768 4.395 10.605 4.395s7.676-1.465 10.605-4.395l19.396-19.394 116.675-116.675c2.813-2.813 4.395-6.621 4.395-10.605s-1.583-7.793-4.395-10.606z" fill="#f3f5f9"/><path d="m377.069 207.353c0-3.984-1.582-7.793-4.395-10.605l-42.437-42.422c-5.859-5.859-15.352-5.859-21.211 0l-53.026 53.036v127.271l116.675-116.675c2.812-2.812 4.394-6.621 4.394-10.605z" fill="#e1e6f0"/></g></svg>Guardar</button>
       </div>
   </form>
</div>

<table id="fabo" class="table table-striped " style="width:100%">
    <thead class="thead-dark">
        <tr>
            <th>FECHA</th>
            <th>CLIENTE</th>
            <th>pRECIO TOTAL</th>
            <th>ABONOS</th>
            <th>FORMA PAGO</th>
            <th>METODO PAGO</th>
            <th>ASESOR</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($rex as $l)

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
      $('#fabo').DataTable();
  </script>



@stop