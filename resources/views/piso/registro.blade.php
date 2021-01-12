@extends('adminlte::page')

@section('title', 'Site-Instalaciones')


@section('content_header')

<div class="d-flex justify-content-between">
       <svg id="Flat" height="70" viewBox="0 0 512 512" width="70" xmlns="http://www.w3.org/2000/svg"><rect fill="#e3e4e2" height="392" rx="24" width="368" x="56" y="24"/><path d="m400 24h-320a24 24 0 0 0 -24 24v40h368v-40a24 24 0 0 0 -24-24z" fill="#0093b9"/><path d="m80 48h16v16h-16z" fill="#eb5849"/><path d="m112 48h16v16h-16z" fill="#f6bc1b"/><path d="m144 48h16v16h-16z" fill="#85bb40"/><path d="m440.224 495.578h-88v-144h-62.745a17.255 17.255 0 0 1 -17.255-17.255 17.255 17.255 0 0 1 14.564-17.044l116.452-18.387a24 24 0 0 1 26.82 17.113l10.164 35.573z" fill="#f5be9a"/><rect fill="#ec917f" height="16" rx="8" transform="matrix(.707 -.707 .707 .707 -128.754 368.297)" width="33.941" x="363.253" y="331.578"/><path d="m471.772 351.578h-223.548l-12.632 8.422h-19.592a8 8 0 0 0 -8 8 8 8 0 0 0 8 8h20.856l11.368 7.578h224a16 16 0 0 0 15.982-16.773c-.406-8.605-7.818-15.227-16.434-15.227z" fill="#0093b9"/><path d="m488.224 367.578a16 16 0 0 0 -16-16h-16v32h16a16 16 0 0 0 16-16z" fill="#e3e4e2"/><path d="m352.224 447.578-17.717-7.086a35.45 35.45 0 0 1 -22.283-32.914l-27.024-27.029a16.97 16.97 0 0 1 -4.971-12 16.971 16.971 0 0 1 16.971-16.971h3.023a16.972 16.972 0 0 1 7.589 1.792l60.417 30.208 24 24z" fill="#f5be9a"/><rect fill="#ec917f" height="33.941" rx="8" transform="matrix(.707 -.707 .707 .707 -168.351 384.721)" width="16" x="372.224" y="378.608"/><path d="m96 128h128v128h-128z" fill="#0093b9"/><circle cx="160" cy="184" fill="#f6bc1b" r="24"/><path d="m128 256v-16a32 32 0 0 1 32-32 32 32 0 0 1 32 32v16z" fill="#f6bc1b"/><g fill="#b2b1b4"><path d="m128 280h96v16h-96z"/><path d="m96 280h16v16h-16z"/><path d="m296 136h96v16h-96z"/><path d="m264 168h128v16h-128z"/><path d="m264 200h128v16h-128z"/><path d="m264 232h128v16h-128z"/><path d="m264 136h16v16h-16z"/><path d="m440 56h16v160h-16z"/><path d="m440 232h16v16h-16z"/></g><path d="m95.428 378.971-14.856-5.942 11.038-27.594a14 14 0 0 1 25.521-1.063l5.972 11.944 12.367-8.244a14.037 14.037 0 0 1 17.666 1.749l10.177 10.179h28.687v16h-29.515a13.907 13.907 0 0 1 -9.9-4.1l-9.605-9.605-12.887 8.592a14 14 0 0 1 -20.288-5.387l-4.993-9.987z" fill="#eb5849"/></svg>
       <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i > <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="50" height="50" x="0" y="0" viewBox="0 0 511 511.99999" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path xmlns="http://www.w3.org/2000/svg" d="m257.128906 452.128906c0-33.066406-26.847656-59.871094-59.96875-59.871094s-59.96875 26.804688-59.96875 59.871094 26.847656 59.871094 59.96875 59.871094 59.96875-26.804688 59.96875-59.871094zm0 0" fill="#f7c92b" data-original="#f7c92b" style="" class=""/><path xmlns="http://www.w3.org/2000/svg" d="m197.160156 392.257812c-6.0625 0-11.914062.90625-17.429687 2.578126 24.617187 7.453124 42.539062 30.277343 42.539062 57.292968 0 27.011719-17.921875 49.839844-42.539062 57.292969 5.515625 1.671875 11.367187 2.578125 17.429687 2.578125 33.121094 0 59.96875-26.804688 59.96875-59.871094s-26.847656-59.871094-59.96875-59.871094zm0 0" fill="#f2b51d" data-original="#f2b51d" style=""/><path xmlns="http://www.w3.org/2000/svg" d="m204.167969 102.699219c-19.261719 3.863281-38.007813-8.589844-41.878907-27.820313-3.871093-19.226562 8.605469-37.945312 27.863282-41.808594 19.257812-3.863281 38.007812 8.589844 41.878906 27.820313 3.867188 19.226563-8.605469 37.945313-27.863281 41.808594zm0 0" fill="#f7c92b" data-original="#f7c92b" style="" class=""/><path xmlns="http://www.w3.org/2000/svg" d="m232.03125 60.890625c-3.871094-19.230469-22.621094-31.683594-41.878906-27.820313-1.792969.359376-3.523438.851563-5.191406 1.453126 11.242187 4.109374 20.144531 13.789062 22.675781 26.367187 3.511719 17.4375-6.425781 34.457031-22.671875 40.355469 5.945312 2.171875 12.542968 2.789062 19.203125 1.453125 19.257812-3.863281 31.730469-22.582031 27.863281-41.808594zm0 0" fill="#f2b51d" data-original="#f2b51d" style=""/><path xmlns="http://www.w3.org/2000/svg" d="m345.691406 442.109375h-297.0625c-26.582031 0-48.128906-21.511719-48.128906-48.046875 0-14.691406 6.660156-28.59375 18.113281-37.816406l9.542969-7.6875c22.074219-17.773438 34.910156-44.566406 34.910156-72.878906v-50.496094c0-74.503906 60.492188-134.898438 135.117188-134.898438 74.621094 0 135.117187 60.394532 135.117187 134.898438v51.429687c0 27.777344 12.355469 54.125 33.726563 71.914063l9.292968 7.734375c11.089844 9.230469 17.5 22.902343 17.5 37.316406v.484375c0 26.535156-21.546874 48.046875-48.128906 48.046875zm0 0" fill="#f7e249" data-original="#f7e249" style="" class=""/><path xmlns="http://www.w3.org/2000/svg" d="m376.320312 356.261719-9.292968-7.734375c-21.371094-17.792969-33.726563-44.136719-33.726563-71.917969v-51.429687c0-74.5-60.496093-134.898438-135.117187-134.898438-13.222656 0-25.996094 1.90625-38.070313 5.441406 56.085938 16.410156 97.046875 68.15625 97.046875 129.457032v51.429687c0 27.78125 12.355469 54.125 33.726563 71.917969l9.296875 7.734375c11.085937 9.230469 17.5 22.902343 17.5 37.316406v.484375c0 26.535156-21.546875 48.046875-48.128906 48.046875h76.140624c26.578126 0 48.125-21.511719 48.125-48.046875v-.484375c0-14.414063-6.410156-28.085937-17.5-37.316406zm0 0" fill="#f7c92b" data-original="#f7c92b" style="" class=""/><path xmlns="http://www.w3.org/2000/svg" d="m440.078125 115.777344c0-63.941406-51.917969-115.777344-115.964844-115.777344s-115.96875 51.835938-115.96875 115.777344 51.921875 115.777344 115.96875 115.777344 115.964844-51.835938 115.964844-115.777344zm0 0" fill="#fc476e" data-original="#fc476e" style="" class=""/><path xmlns="http://www.w3.org/2000/svg" d="m355.230469 4.222656c29.574219 20.980469 48.867187 55.460938 48.867187 94.441406 0 63.941407-51.917968 115.777344-115.964844 115.777344-10.78125 0-21.214843-1.472656-31.117187-4.222656 18.9375 13.4375 42.09375 21.335938 67.097656 21.335938 64.042969 0 115.964844-51.835938 115.964844-115.777344 0-53.179688-35.914063-97.976563-84.847656-111.554688zm0 0" fill="#cc2b5a" data-original="#cc2b5a" style="" class=""/><path xmlns="http://www.w3.org/2000/svg" d="m324.113281 169.851562c-4.472656 0-8.097656-3.617187-8.097656-8.082031v-77.960937l-3.019531 2.753906c-3.304688 3.007812-8.425782 2.773438-11.4375-.527344-3.011719-3.296875-2.777344-8.410156.527344-11.417968l16.570312-15.085938c2.371094-2.15625 5.789062-2.714844 8.726562-1.421875 2.933594 1.292969 4.824219 4.191406 4.824219 7.394531v96.265625c0 4.464844-3.625 8.082031-8.09375 8.082031zm0 0" fill="#d3244d" data-original="#e3faff" style="" class=""/></g></svg> <span class="badge badge-warning ">notificacines</span></i>
            @if (count(auth()->user()->unreadNotifications))
            <span class="badge badge-danger">{{ count(auth()->user()->unreadNotifications) }}</span>

            @endif
          </span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <span class="dropdown-header" >Notifications sin Leer</span>
          @forelse (auth()->user()->unreadNotifications as $notification)
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> {{ $notification->data['Oservicio'] }}
            <span class="ml-3 pull-right text-muted text-sm">{{ $notification->created_at->diffForHumans() }}</span>
          </a>
          @empty
            <span class="ml-3 pull-right text-muted text-sm">Sin notificaciones por leer </span>
          @endforelse

          <div class="dropdown-divider"></div>
          <span class="dropdown-header">Notifications Leidas</span>
          @forelse (auth()->user()->readNotifications as $notification)
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> {{ $notification->data['cliente'] }}
            <span class="ml-3 pull-right text-muted text-sm">{{ $notification->created_at->diffForHumans() }}</span>
          </a>
          @empty
            <span class="ml-3 pull-right text-muted text-sm">Sin notificaciones leidas                      </span>
          @endforelse


          <div class="dropdown-divider"></div>
          <a href="{{route('MarkasRead')}}" class="dropdown-item dropdown-footer"><span class="badge badge-warning"> click !! Marcar Notificaciones Leidas </span></a>
        </div>
      </li>
    </div>
@stop

@section('content')

<h1 class="text-center text-orange mb-5 display-4 fst-italic" id="titulo">RECEPCION UNIDADES</h1>



 <livewire:scripts>
 @livewire('produccion-component')





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
    $('#tabla1990').DataTable( {
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
