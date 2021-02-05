
<div class="container">
<!-- Flexbox container for aligning the toasts -->
           @if (session('message')=='ok'){
               <script>
                  Swal.fire({
                  position: 'top-end',
                  icon: 'info',
                  title: 'Datos Guardados Correctamente !!!',
                  showConfirmButton: false,
                  timer: 2500
                    })
               </script>


           @endif

        <form wire:submit.prevent="ingreso" class="formulario-contacto">
        <div class="form-row">
      <div class="form-group col-md-4">
        <input type="text" class="form-control" placeholder="Numero Cotizacion  (crear uno)" wire:model="cotizacion" required>
        @error('cotizacion')<span class="error text-white"></span>@enderror
      </div>

      <div class="form-group col-md-4">
        <input type="date" class="form-control" placeholder="fecha" wire:model="fecha" required>
        @error('fecha')<span class="error text-white"></span>@enderror
      </div>

      <div class="form-group col-md-4">
        <input type="text" class="form-control" placeholder="Id Cliente" wire:model="id_cliente" required>
        @error('id_cliente')<span class="error text-white"></span>@enderror
      </div>

    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <input type="text" class="form-control" placeholder="Empresa" wire:model="empresa" required>
        @error('empresa')<span class="error text-white"></span>@enderror
      </div>

      <div class="form-group col-md-6">
        <input type="text" class="form-control" placeholder="Nombre Contacto" wire:model="contacto" required>
        @error('contacto')<span class="error text-white"></span>@enderror
      </div>

    </div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <input type="text" class="form-control" placeholder="Telefono " wire:model="telefono1" required>

        @error('telefono1')<span class="error text-white"></span>@enderror
      </div>

      <div class="form-group col-md-4">
       <input type="text" placeholder="tipo de Unidad" required wire:model="tipo_unidad" class="form-control">
      </div>

      <div class="form-group col-md-4">
        <input type="email" class="form-control" placeholder="Correo" wire:model="correo" required>
        @error('correo')<span class="error text-danger"></span>@enderror
      </div>

    </div>
    <div class="form-row">
    <div class="form-group col-md-4" >
        <select wire:model="medio" class="form-control" required>
          <option selected>Medio Contacto</option>
          <option>WhatSapp</option>
          <option>Facebook</option>
          <option>Publicidad</option>
          <option>Correo</option>
          <option>Piso Venta</option>
          <option>Telefono Oficina</option>
        </select>
      </div>

      <div class="form-group col-md-4" >
        <select wire:model="asesor" class="form-control" required>
          <option selected>Asesor</option>
          <option>Juan Carlos Villicaña</option>
          <option>Monserrat Villicaña</option>
          <option>Miguel Franco</option>
          <option>Monserrath  Mohedano</option>
        </select>
      </div>

      <div class="form-group col-md-4">
        <select  wire:model="tipo_servicio" class="form-control" required>
          <option selected>Tipo Servicio</option>
          <option>Nuevo</option>
          <option>Reparacion</option>
          <option>Modificacion</option>
          <option>Instalacion</option>
        </select>
      </div>

      <select  class="form-control" wire:model="productos" required>
          <option selected>Productos</option>
           <option>Caja Seca con Copete</option>
           <option>Caja Seca Cuadrada</option>
          <option>Redila</option>
          <option>Carroceria</option>
          <option>Pipa</option>
          <option>Volteo</option>
          <option>Plataforma</option>
          <option>Remolque</option>
          <option>Camper fibra de vidrio</option>
          <option>Camper Metallico</option>
          <option>Refrigerado</option>
          <option>Gruas</option>
          <option>Conversiones</option>
          <option>Caja Refrigerada</option>
          <option>plataforma tipo L</option>
          <option>Plataforma Materialista</option>
          <option>Remolque</option>

        </select>
      </div>

      <div  class="d-flex justify-content-center">
       <button class="btn btn-primary btn-block mt-3 mb-5 " type="submit"><svg  id="Capa_1" enable-background="new 0 0 512 512" height="30" viewBox="0 0 512 512" width="30" xmlns="http://www.w3.org/2000/svg"><g><path d="m256 0c-140.7 0-256 115.3-256 256s115.3 256 256 256 256-115.3 256-256-115.3-256-256-256z" fill="#f3f5f9"/><path d="m512 256c0 140.7-115.3 256-256 256v-512c140.7 0 256 115.3 256 256z" fill="#e1e6f0"/><circle cx="256" cy="256" fill="#a0e65c" r="226"/><path d="m482 256c0 124.2-101.8 226-226 226v-452c124.2 0 226 101.8 226 226z" fill="#79cc52"/><path d="m372.675 196.747-42.437-42.422c-5.859-5.859-15.352-5.859-21.211 0l-53.027 53.037-30 30.005-23.042-23.042c-5.859-5.859-15.352-5.859-21.211 0l-42.422 42.422c-5.859 5.859-5.859 15.352 0 21.211l76.069 76.069c2.93 2.93 6.768 4.395 10.605 4.395s7.676-1.465 10.605-4.395l19.396-19.394 116.675-116.675c2.813-2.813 4.395-6.621 4.395-10.605s-1.583-7.793-4.395-10.606z" fill="#f3f5f9"/><path d="m377.069 207.353c0-3.984-1.582-7.793-4.395-10.605l-42.437-42.422c-5.859-5.859-15.352-5.859-21.211 0l-53.026 53.036v127.271l116.675-116.675c2.812-2.812 4.394-6.621 4.394-10.605z" fill="#e1e6f0"/></g></svg>Guardar</button>
      </div>


        </form>



  </div>
  @include('livewire.table')

