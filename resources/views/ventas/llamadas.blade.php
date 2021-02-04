@extends('adminlte::page')

@section('title', 'Site-Ventas')


@section('content_header')
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="70" height="70" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><g xmlns="http://www.w3.org/2000/svg"><path d="m410 467c0 20.711-16.789 37.5-37.5 37.5h-233c-20.711 0-37.5-16.789-37.5-37.5v-422c0-20.711 16.789-37.5 37.5-37.5h233c20.711 0 37.5 16.789 37.5 37.5z" fill="#12f120" data-original="#f8f7f7" style=""/><path d="m405.93 484c-6.2 12.17-18.84 20.5-33.43 20.5h-233c-20.71 0-37.5-16.79-37.5-37.5v-422c0-14.61 8.35-27.26 20.54-33.45v447.45c0 13.81 11.19 25 25 25z" fill="#e8e8e8" data-original="#e8e8e8" style=""/><circle cx="294" cy="37.5" fill="#e8e8e8" r="7.5" data-original="#e8e8e8" style=""/><g><path d="m372.5 512h-233c-24.813 0-45-20.187-45-45v-422c0-24.813 20.187-45 45-45h233c24.813 0 45 20.187 45 45v422c0 24.813-20.187 45-45 45zm-233-497c-16.542 0-30 13.458-30 30v422c0 16.542 13.458 30 30 30h233c16.542 0 30-13.458 30-30v-422c0-16.542-13.458-30-30-30z" fill="#766d78" data-original="#766d78" style=""/></g><g><path d="m269 45h-50c-4.142 0-7.5-3.358-7.5-7.5s3.358-7.5 7.5-7.5h50c4.142 0 7.5 3.358 7.5 7.5s-3.358 7.5-7.5 7.5z" fill="#e8e8e8" data-original="#e8e8e8" style=""/></g><path d="m374.5 87.5v109l-116.436 4.995-120.564-4.995 1-108c0-7.944 5.185-15.452 13-15.967.331-.022.664-.033 1-.033h207c8.28 0 15 6.72 15 15z" fill="#df646e" data-original="#df646e" style=""/><path d="m159.143 324.953c.64.603 1.645.586 2.289-.014 2.293-2.138 5.398-3.448 8.794-3.438 6.965.021 12.648 5.739 12.55 12.613-.176 12.282-17.849 22.166-21.745 24.197-.474.247-1.038.253-1.518.017-3.963-1.955-21.989-11.551-21.734-24.213.136-6.733 5.804-12.565 12.627-12.613 3.397-.026 6.466 1.309 8.737 3.451z" fill="#df646e" data-original="#df646e" style=""/><g><g><path d="m374.5 348h-70c-4.142 0-7.5-3.358-7.5-7.5s3.358-7.5 7.5-7.5h70c4.142 0 7.5 3.358 7.5 7.5s-3.358 7.5-7.5 7.5z" fill="#e8e8e8" data-original="#e8e8e8" style=""/></g><g><path d="m156.5 402h-19c-4.142 0-7.5-3.358-7.5-7.5s3.358-7.5 7.5-7.5h19c4.142 0 7.5 3.358 7.5 7.5s-3.358 7.5-7.5 7.5z" fill="#e8e8e8" data-original="#e8e8e8" style=""/></g><g><path d="m255.5 402h-69c-4.142 0-7.5-3.358-7.5-7.5s3.358-7.5 7.5-7.5h69c4.142 0 7.5 3.358 7.5 7.5s-3.358 7.5-7.5 7.5z" fill="#e8e8e8" data-original="#e8e8e8" style=""/></g><g><path d="m374 432h-32.276c-4.142 0-7.5-3.358-7.5-7.5s3.358-7.5 7.5-7.5h32.276c4.142 0 7.5 3.358 7.5 7.5s-3.358 7.5-7.5 7.5z" fill="#e8e8e8" data-original="#e8e8e8" style=""/></g><g><path d="m311.724 432h-75.224c-4.142 0-7.5-3.358-7.5-7.5s3.358-7.5 7.5-7.5h75.224c4.142 0 7.5 3.358 7.5 7.5s-3.358 7.5-7.5 7.5z" fill="#e8e8e8" data-original="#e8e8e8" style=""/></g><g><path d="m206.5 432h-69c-4.142 0-7.5-3.358-7.5-7.5s3.358-7.5 7.5-7.5h69c4.142 0 7.5 3.358 7.5 7.5s-3.358 7.5-7.5 7.5z" fill="#e8e8e8" data-original="#e8e8e8" style=""/></g><g><path d="m311.5 462h-174c-4.142 0-7.5-3.358-7.5-7.5s3.358-7.5 7.5-7.5h174c4.142 0 7.5 3.358 7.5 7.5s-3.358 7.5-7.5 7.5z" fill="#e8e8e8" data-original="#e8e8e8" style=""/></g></g><path d="m213.5 331.5v17c0 5.523 4.477 10 10 10h27.365c3.652 0 7.2 1.217 10.082 3.459l5.483 4.264c3.284 2.554 8.07.214 8.07-3.947v-30.776c0-5.523-4.477-10-10-10h-41c-5.523 0-10 4.477-10 10z" fill="#d6ccf2" data-original="#d6ccf2" style=""/><path d="m319.5 196.5c0-31.39-22.958-57.419-52.998-62.21-3.257-.52-6.598.23-10.002.23-34.794 0-61.014 27.186-61.014 61.98l62.578 4.995z" fill="#ffd163" data-original="#ffd163" style=""/><path d="m266.5 134.3c-30.04 4.78-53 30.81-53 62.2l-9.938 2.737-10.062-2.737c0-34.79 28.21-63 63-63 3.4 0 6.74.27 10 .8z" fill="#ffb65f" data-original="#ffb65f" style="" class=""/><path d="m374.5 196.5v75c0 .336-.011.67-.033 1-.515 7.814-8.023 13-15.967 13h-205c-8.28 0-15-6.72-15-15v-74z" fill="#d6ccf2" data-original="#d6ccf2" style=""/><g><g><path d="m294.5 234h-76c-4.142 0-7.5-3.358-7.5-7.5s3.358-7.5 7.5-7.5h76c4.142 0 7.5 3.358 7.5 7.5s-3.358 7.5-7.5 7.5z" fill="#c8b8f4" data-original="#c8b8f4" style=""/></g><g><path d="m280 264h-47c-4.142 0-7.5-3.358-7.5-7.5s3.358-7.5 7.5-7.5h47c4.142 0 7.5 3.358 7.5 7.5s-3.358 7.5-7.5 7.5z" fill="#c8b8f4" data-original="#c8b8f4" style=""/></g></g><path d="m151.5 72.54v123.96l-7 3.234-7-3.234v-109c0-7.94 6.18-14.45 14-14.96z" fill="#dc4955" data-original="#dc4955" style="" class=""/><path d="m374.46 272.5c-.51 7.82-7.02 14-14.96 14h-207c-8.284 0-15-6.716-15-15v-75h14v69c0 3.866 3.134 7 7 7z" fill="#c8b8f4" data-original="#c8b8f4" style=""/></g></g></svg>


@stop

@section('content')

<h1 class="text-center  font-weight-bold mb-5 display-4 fst-italic" id="titulo" style="color:rgb(109, 248, 28)">REGISTRO LLAMADAS TELEFONICAS</h1>
<!--scripts -->


 <livewire:scripts>
 @livewire('llamada-component')





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

    $('#llamada').DataTable();

 </script>








@stop
