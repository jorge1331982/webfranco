@extends('adminlte::page')

@section('title', 'Site-Revision-Unidad')


@section('content_header')
    <svg id="Flat" height="70" viewBox="0 0 512 512" width="70" xmlns="http://www.w3.org/2000/svg"><rect fill="#e3e4e2" height="392" rx="24" width="368" x="56" y="24"/><path d="m400 24h-320a24 24 0 0 0 -24 24v40h368v-40a24 24 0 0 0 -24-24z" fill="#0093b9"/><path d="m80 48h16v16h-16z" fill="#eb5849"/><path d="m112 48h16v16h-16z" fill="#f6bc1b"/><path d="m144 48h16v16h-16z" fill="#85bb40"/><path d="m440.224 495.578h-88v-144h-62.745a17.255 17.255 0 0 1 -17.255-17.255 17.255 17.255 0 0 1 14.564-17.044l116.452-18.387a24 24 0 0 1 26.82 17.113l10.164 35.573z" fill="#f5be9a"/><rect fill="#ec917f" height="16" rx="8" transform="matrix(.707 -.707 .707 .707 -128.754 368.297)" width="33.941" x="363.253" y="331.578"/><path d="m471.772 351.578h-223.548l-12.632 8.422h-19.592a8 8 0 0 0 -8 8 8 8 0 0 0 8 8h20.856l11.368 7.578h224a16 16 0 0 0 15.982-16.773c-.406-8.605-7.818-15.227-16.434-15.227z" fill="#0093b9"/><path d="m488.224 367.578a16 16 0 0 0 -16-16h-16v32h16a16 16 0 0 0 16-16z" fill="#e3e4e2"/><path d="m352.224 447.578-17.717-7.086a35.45 35.45 0 0 1 -22.283-32.914l-27.024-27.029a16.97 16.97 0 0 1 -4.971-12 16.971 16.971 0 0 1 16.971-16.971h3.023a16.972 16.972 0 0 1 7.589 1.792l60.417 30.208 24 24z" fill="#f5be9a"/><rect fill="#ec917f" height="33.941" rx="8" transform="matrix(.707 -.707 .707 .707 -168.351 384.721)" width="16" x="372.224" y="378.608"/><path d="m96 128h128v128h-128z" fill="#0093b9"/><circle cx="160" cy="184" fill="#f6bc1b" r="24"/><path d="m128 256v-16a32 32 0 0 1 32-32 32 32 0 0 1 32 32v16z" fill="#f6bc1b"/><g fill="#b2b1b4"><path d="m128 280h96v16h-96z"/><path d="m96 280h16v16h-16z"/><path d="m296 136h96v16h-96z"/><path d="m264 168h128v16h-128z"/><path d="m264 200h128v16h-128z"/><path d="m264 232h128v16h-128z"/><path d="m264 136h16v16h-16z"/><path d="m440 56h16v160h-16z"/><path d="m440 232h16v16h-16z"/></g><path d="m95.428 378.971-14.856-5.942 11.038-27.594a14 14 0 0 1 25.521-1.063l5.972 11.944 12.367-8.244a14.037 14.037 0 0 1 17.666 1.749l10.177 10.179h28.687v16h-29.515a13.907 13.907 0 0 1 -9.9-4.1l-9.605-9.605-12.887 8.592a14 14 0 0 1 -20.288-5.387l-4.993-9.987z" fill="#eb5849"/>
</svg>

@stop

@section('content')

<h1 class="text-center text-yellow  font-weight-bold mb-5 display-4 fst-italic" id="titulo">Datos Unidad Revision </h1>

<livewire:scripts>
 @livewire('salida-component')




@stop

@section('css')
<link href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">



@stop

@section('js')
<script>
    $(document).ready(function() {
    $('#jort').DataTable( {
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