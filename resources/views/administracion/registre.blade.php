@extends('adminlte::page')

@section('title', 'admin')


@section('content_header')
<svg id="Layer_1" enable-background="new 0 0 256 256" height="60" viewBox="0 0 256 256" width="60" xmlns="http://www.w3.org/2000/svg"><g id="Layer_6"><g><path d="m230.8 132.2-18.5-74.4c-.3-1-1.3-1.7-2.3-1.5l-59.2 9.2c-1 .2-1.8 1.1-1.8 2.1l5 76.5c.1 2.3 2 4 4.3 3.9h.5l68.8-10.7c2.2-.3 3.8-2.5 3.4-4.7-.2-.1-.2-.3-.2-.4z" fill="#fc657e"/><path d="m153.9 144.1-5-76.5c0-1.1.7-2 1.8-2.1l26.8-4.2-5.8-23.2c-.4-1.3-1.7-2.2-3-2l-78 12.1c-1.4.2-2.4 1.4-2.3 2.8l6.5 100.7c.1 3 2.7 5.3 5.6 5.2.2 0 .4 0 .6-.1l57.5-8.9c-2.2.3-4.4-1.2-4.7-3.4.1-.1 0-.2 0-.4z" fill="#f5c84c"/><circle cx="108.9" cy="229.4" fill="#29589f" r="17.3"/><circle cx="194.3" cy="229.4" fill="#29589f" r="17.3"/><path d="m38.4 54.6c-.2 0-.4 0-.6 0l-29.5-2.9c-3.5-.3-6.1-3.4-5.8-6.9s3.4-6.1 6.9-5.8l29.6 2.9c3.5.3 6.1 3.5 5.7 7-.3 3.2-3 5.7-6.3 5.7z" fill="#fc657e"/><path d="m215.9 200.1h-119.9l10.4-15.1c3.7-5.4 9.4-9 15.9-10.1l79.9-13.1c3.3-.5 5.5-3.6 5-6.9-.5-2.9-3-5.1-6-5.1l-83.3 13.6c-8.7 2.1-16.3 7.3-21.4 14.6l-13.7 20c-2.8 4.1-1.8 9.7 2.3 12.5 1.5 1 3.3 1.6 5.1 1.6h125.7c3.3 0 6-2.7 6-6 .1-3.3-2.6-6-6-6z" fill="#dae6f1"/><circle cx="108.9" cy="229.4" fill="#5290db" r="6.2"/><circle cx="194.3" cy="229.4" fill="#5290db" r="6.2"/><path d="m253.2 158.7h-2.1v-2.1c0-1.5-1.3-2.8-2.8-2.8s-2.8 1.3-2.8 2.8v2.1h-2.1c-1.5 0-2.8 1.3-2.8 2.8s1.3 2.8 2.8 2.8h2.1v2.1c0 1.5 1.3 2.8 2.8 2.8s2.8-1.3 2.8-2.8v-2.1h2.1c1.5 0 2.8-1.3 2.8-2.8s-1.3-2.8-2.8-2.8z" fill="#70d6f9"/><path d="m88.3 30.5c-4-.7-7.1-3.8-7.9-7.7 0-.1-.1-.2-.2-.1-.1 0-.1.1-.1.1-.8 4-3.9 7-7.9 7.7-.1 0-.2.1-.1.2 0 .1.1.1.1.1 4 .7 7.1 3.8 7.9 7.7 0 .1.1.2.2.1.1 0 .1-.1.1-.1.8-4 3.9-7 7.9-7.7.1 0 .2-.1.1-.2 0-.1 0-.1-.1-.1z" fill="#f5c84c"/><circle cx="64" cy="52.8" fill="#fc657e" r="3"/><circle cx="57" cy="139.8" fill="#87d147" r="3"/><circle cx="238" cy="180.8" fill="#f5c84c" r="3"/><path d="m8 54.2 29.5 2.8c.5.1 1.1.1 1.6 0l43.9 100.7c3.2 7.4 10.9 11.9 18.9 10.9-2.9 2.3-5.4 5-7.5 8.1l-13.7 19.8c-3.6 5.2-2.3 12.4 3 16 1.9 1.3 4.2 2 6.5 2h5.5c-8.2 7.2-8.9 19.7-1.7 27.9s19.7 8.9 27.9 1.7 8.9-19.7 1.7-27.9c-.5-.6-1.1-1.2-1.7-1.7h59.2c-8.2 7.2-8.9 19.7-1.7 27.9s19.7 8.9 27.9 1.7 8.9-19.7 1.7-27.9c-.5-.6-1.1-1.2-1.7-1.7h8.5c4.7 0 8.5-3.8 8.5-8.5s-3.8-8.5-8.5-8.5h-115l7.7-11.1c3.3-4.8 8.5-8.1 14.2-9l79.9-13.1c4.6-.8 7.8-5.1 7-9.8-.2-1.2-.6-2.3-1.3-3.3l23.2-3.8c5.2-.8 9-5.3 9-10.6v-59.5c0-4.7-3.8-8.4-8.4-8.4-.1 0-.2 0-.2 0l-14.3.4-3-12.2c-.6-2.2-2.8-3.7-5.1-3.3l-6.1.9-.2-1.3c-2-12.9-14.1-21.8-27-19.8-1.4.2-2.7.6-4.1 1-1.1-.8-2.5-1.2-3.9-1l-8.8 1.4-.4-2.5c-2.5-16.5-18.1-27.8-34.6-25.2s-27.8 18.1-25.3 34.6l.4 2.5-9.1 1.4c-2.6.4-4.6 2.8-4.4 5.4l1.4 21.6-35.4 1-8.1-18.5c3.9-3 4.6-8.6 1.6-12.5-1.5-1.9-3.7-3.2-6.2-3.4l-29.6-2.8c-4.9-.5-9.2 3.1-9.7 8s3.1 9.2 8 9.6zm87.6 69.3-2.6-40.2 29.6 67.8-14 2.2zm7.8 30.6-2.6.4c-1.6.2-3.1-.8-3.3-2.4 0-.1 0-.3 0-.4l-.9-13.4zm58-94.1c-1.2-7.4 2.2-14.7 8.5-18.7l4.5 18-12.8 2zm50.1 14.4 5.4 12.4 11.4 45.9v.1c.2.9-.3 1.8-1.1 2-.1 0-.1 0-.2 0l-3.9.6-26.4-60.6zm-20.1.6 26.7 61.3-14 2.2-27.5-63zm16.1 71.3-1.4-3.2 14-2.2 1.3 3.1zm-38.1 6.3-1.5-3.5 14-2.2 1.5 3.4zm-3.5-8.2-11-25.3-2.6-40.3 27.6 63.5zm-7.6 1.1c-.9.1-1.7-.5-1.8-1.4 0-.1 0-.2 0-.2l-.7-10.2 5 11.4zm4.5 4.4 1.5 3.5-13.9 2.3-1.6-3.6zm-17.5 6.6-13.9 2.3-1.6-3.8 14-2.2zm43.2-7-1.5-3.3 14-2.2 1.4 3.2zm-17.3-74 27.7 63.7-14 2.2-28.5-65.5zm-19.5-4.4-.2-3.2 6-.9.6 3.9zm-2.8 34.4-12.6-29 10.7-.3zm-18-28.9 19 43.6 1.6 24c0 .8.2 1.5.5 2.3l-5.2.8-30.7-70.3zm-20.2.6 30.9 70.9-14 2.2-31.6-72.7zm13.9 78.6 1.7 3.8-13.9 2.3-1.7-3.9zm-.9 73.6c0 8.2-6.6 14.8-14.8 14.8s-14.8-6.6-14.8-14.8 6.6-14.8 14.8-14.8 14.8 6.6 14.8 14.8zm85.4 0c0 8.2-6.6 14.8-14.8 14.8s-14.8-6.6-14.8-14.8 6.6-14.8 14.8-14.8 14.8 6.6 14.8 14.8zm-4.4-74.1c.3 1.9-1 3.7-2.9 4l-79.9 13.1c-7.1 1.2-13.4 5.2-17.5 11.1l-10.4 15.2c-.8 1.1-.5 2.7.6 3.5.4.3.9.4 1.4.4h119.9c1.9 0 3.5 1.6 3.5 3.5s-1.6 3.5-3.5 3.5h-125.6c-3.6 0-6.5-2.9-6.5-6.5 0-1.3.4-2.6 1.2-3.7l13.7-19.8c4.7-6.8 11.8-11.7 19.9-13.6l83-13.6c1.5.1 2.9 1.3 3.1 2.9zm26.1-12.8-4.2.7-1.3-3 2.6-.4c3.6-.6 6.1-4 5.5-7.6 0-.2-.1-.5-.1-.7l-4.3-17.1 6.7 15.4v7.1c-.1 2.8-2.1 5.2-4.9 5.6zm1.3-68.6c1.9-.1 3.5 1.4 3.5 3.3v.1 40l-13.9-32-2.7-11zm-22.1-15.1 2.6 10.6-49.5 1.3-.7-4.6 36.9-5.7.8 5.1c.2 1.4 1.5 2.3 2.9 2.1s2.3-1.5 2.1-2.9l-.8-5.1zm-33-20.2c10.2-1.6 19.7 5.4 21.3 15.6l.2 1.3-19.2 3-4.8-19.3c.9-.3 1.7-.5 2.5-.6zm-12.9.8c-1.2 1.1-2.4 2.3-3.4 3.7l-.5-3.1zm-60.1 1.8c-2.2-13.8 7.2-26.9 21.1-29.1s26.9 7.2 29.1 21.1v.2l.4 2.5-50.2 7.8zm-12.9 9.6 9.1-1.4 1.2 7.5c.5 3.3 5.4 2.5 4.9-.8l-1.2-7.5 50.2-7.8 1.2 7.5c.1.6.4 1.1.9 1.5-1.2 3.5-1.5 7.3-.9 11l.2 1.3-6.3 1c-2.3.4-4 2.4-3.9 4.8l.2 3.4-54.4 1.5-1.4-21.8c0-.1.1-.2.2-.2zm-1.4 59.2-13.9-31.9 11.8-.3zm-19.3-31.7 20.2 46.5 1.8 27.2c.2 4.4 3.9 7.8 8.3 7.6.3 0 .6 0 .9-.1l3.9-.6 1.7 4-5.2.9c-6 1-11.9-2.2-14.4-7.8l-33.5-77.3zm-61.2-36.8 29.5 2.8c2.1.2 3.7 2.1 3.5 4.2s-2.1 3.7-4.2 3.5l-29.5-2.7c-2.1-.2-3.7-2.1-3.5-4.3.2-2.1 2.1-3.7 4.2-3.5z"/><path d="m108.9 238.1c4.8 0 8.7-3.9 8.7-8.7s-3.9-8.7-8.7-8.7-8.7 3.9-8.7 8.7 3.9 8.7 8.7 8.7zm0-12.4c2.1 0 3.7 1.7 3.7 3.7s-1.7 3.7-3.7 3.7c-2.1 0-3.7-1.7-3.7-3.7 0-2.1 1.7-3.7 3.7-3.7z"/><path d="m194.3 238.1c4.8 0 8.7-3.9 8.7-8.7s-3.9-8.7-8.7-8.7-8.7 3.9-8.7 8.7c0 4.8 3.9 8.7 8.7 8.7zm0-12.4c2.1 0 3.7 1.7 3.7 3.7 0 2.1-1.7 3.7-3.7 3.7-2.1 0-3.7-1.7-3.7-3.7 0-2.1 1.7-3.7 3.7-3.7z"/></g></g></svg>
@stop





@section('content')



<h1 class="text-center text-orange font-weight-bold mb-5 display-4 fst-italic" id="titulo">REGISTRO ADMINISTRACION</h1>





    <button type="button" class="btn btn-primary mb-5" data-toggle="modal" data-target="#exampleModal">
        Registro Clientes Datos
      </button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-dark" id="exampleModalLabel">Registro Cliente</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{route('register')}}" >
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                           <input type="date" placeholder="ingrese Fecha" name="fechaA" required class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                         <input type="text" placeholder="Nombre Cliente" name="nombreC" required class="form-control">
                      </div>
                        <div class="form-group col-md-6">
                         <input type="mail" placeholder="Correo Cliente" name="correo" required class="form-control">
                      </div>
                      <div class="form-group col-md-6">
                         <input type="text" placeholder="Telefono" name="telefono" required class="form-control">
                      </div>
                      <div class="form-group col-md-12">
                         <input type="text" placeholder="Razon Social" name="razonsocial" required class="form-control">
                      </div>
                      <div class="form-group col-md-12">
                         <input type="text" placeholder="Direccion Cliente (calle)" name="calle" required class="form-control">
                      </div>
                      <div class="form-group col-md-4">
                         <input type="text" placeholder="Num interior y Exterior" name="numero" required class="form-control">
                      </div>
                      <div class="form-group col-md-4">
                         <input type="text" placeholder="Colonia" name="colonia" required class="form-control">
                      </div>
                      <div class="form-group col-md-4">
                         <input type="text" placeholder="Delegacion Mpio" name="mpio" required class="form-control">
                      </div>
                      <div class="form-group col-md-6">
                         <input type="text" placeholder="Estado" name="estado" required class="form-control">
                      </div>
                      <div class="form-group col-md-6">
                         <input type="text" placeholder="Codigo Postal" name="codigop" required class="form-control">
                      </div>
                    </div>
                    <div  class="d-flex justify-content-center">
                     <button class="btn btn-primary btn-block mt-2 mb-5 " type="submit"><svg  id="Capa_1" enable-background="new 0 0 512 512" height="30" viewBox="0 0 512 512" width="30" xmlns="http://www.w3.org/2000/svg"><g><path d="m256 0c-140.7 0-256 115.3-256 256s115.3 256 256 256 256-115.3 256-256-115.3-256-256-256z" fill="#f3f5f9"/><path d="m512 256c0 140.7-115.3 256-256 256v-512c140.7 0 256 115.3 256 256z" fill="#e1e6f0"/><circle cx="256" cy="256" fill="#a0e65c" r="226"/><path d="m482 256c0 124.2-101.8 226-226 226v-452c124.2 0 226 101.8 226 226z" fill="#79cc52"/><path d="m372.675 196.747-42.437-42.422c-5.859-5.859-15.352-5.859-21.211 0l-53.027 53.037-30 30.005-23.042-23.042c-5.859-5.859-15.352-5.859-21.211 0l-42.422 42.422c-5.859 5.859-5.859 15.352 0 21.211l76.069 76.069c2.93 2.93 6.768 4.395 10.605 4.395s7.676-1.465 10.605-4.395l19.396-19.394 116.675-116.675c2.813-2.813 4.395-6.621 4.395-10.605s-1.583-7.793-4.395-10.606z" fill="#f3f5f9"/><path d="m377.069 207.353c0-3.984-1.582-7.793-4.395-10.605l-42.437-42.422c-5.859-5.859-15.352-5.859-21.211 0l-53.026 53.036v127.271l116.675-116.675c2.812-2.812 4.394-6.621 4.394-10.605z" fill="#e1e6f0"/></g></svg>Guardar</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>

<div class="container">
 <livewire:scripts>
 @livewire('datoscliente-component')
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
