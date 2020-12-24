<div class="container">



    @if(session('message')=='Datos Guardados Correctamente')
        <script>
          Swal.fire({
         icon: 'success',
         title: '!!Exito!!',
         text: 'Datos Guardados Correctamente',

        });
        </script>
     @endif


    <form wire:submit.prevent="derek">
       <div class="row">
           <div class="form-group col-md-4">
               <label for="gg">Ingrese Fecha Registro</label>
               <input type="date"  wire:model="fechaP" class="form-control" required id="gg">
           </div>
           <div class="form-group col-md-4">
               <label for="B">Folio de Check In</label>
            <input type="text"  wire:model="folio" class="form-control" required id="B">
        </div>
        <div class="form-group col-md-4">
            <label for="n">Seleccione la Orden de Servicio</label>
            <select wire:model="venta_id" class="form-control" required id="n">
              <option selected>Seleccione la orden Correcta</option>
            @foreach($prod as $t)
              <option value="{{$t->id}}" >{{$t->Oservicio}}</option>
              @endforeach
            </select>
        </div>
       </div>



       <div class="row">
           <div class="form-group col-md-3">
            <input type="text" placeholder="Ingrese Tipo de Unidad" wire:model="tipo_unidad" required class="form-control">
           </div>
           <div class="form-group col-md-3">
            <input type="text" placeholder="Ingrese Marca del vehiculo" wire:model="marca" required class="form-control">
        </div>
        <div class="form-group col-md-3">
            <input type="text" placeholder="Ingrese Modelo del Vehiculo" wire:model="modelo" required class="form-control">
        </div>
        <div class="form-group col-md-3">
            <input type="text" placeholder="Ingrese Año del Vehiculo" wire:model="year" required class="form-control">
        </div>
       </div>

       <div class="row">
        <div class="form-group col-md-4">
         <input type="text" placeholder="Ingrese # serie chasis del Vehiculo" wire:model="serie" required class="form-control">
        </div>
        <div class="form-group col-md-4">
         <select wire:model="tipo_trabajo" class="form-control" required>
             <option selected>Seleccione el Tipo de Trabajo</option>
             <option>REPARACION</option>
             <option>INSTALACION CAJA USADA</option>
             <option>MODIFICACION</option>
             <option>INSTALACION NUEVA</option>
           </select>
        </div>
        <div class="form-group col-md-4">
         <input type="text" placeholder="Ingrese # serie de la caja si es instalacion nueva" wire:model="serie_caja" required class="form-control">
        </div>
    </div>
    <div  class="d-flex justify-content-center">
     <button class="btn btn-primary btn-block mt-2 mb-5 " type="submit"><svg  id="Capa_1" enable-background="new 0 0 512 512" height="30" viewBox="0 0 512 512" width="30" xmlns="http://www.w3.org/2000/svg"><g><path d="m256 0c-140.7 0-256 115.3-256 256s115.3 256 256 256 256-115.3 256-256-115.3-256-256-256z" fill="#f3f5f9"/><path d="m512 256c0 140.7-115.3 256-256 256v-512c140.7 0 256 115.3 256 256z" fill="#e1e6f0"/><circle cx="256" cy="256" fill="#a0e65c" r="226"/><path d="m482 256c0 124.2-101.8 226-226 226v-452c124.2 0 226 101.8 226 226z" fill="#79cc52"/><path d="m372.675 196.747-42.437-42.422c-5.859-5.859-15.352-5.859-21.211 0l-53.027 53.037-30 30.005-23.042-23.042c-5.859-5.859-15.352-5.859-21.211 0l-42.422 42.422c-5.859 5.859-5.859 15.352 0 21.211l76.069 76.069c2.93 2.93 6.768 4.395 10.605 4.395s7.676-1.465 10.605-4.395l19.396-19.394 116.675-116.675c2.813-2.813 4.395-6.621 4.395-10.605s-1.583-7.793-4.395-10.606z" fill="#f3f5f9"/><path d="m377.069 207.353c0-3.984-1.582-7.793-4.395-10.605l-42.437-42.422c-5.859-5.859-15.352-5.859-21.211 0l-53.026 53.036v127.271l116.675-116.675c2.812-2.812 4.394-6.621 4.394-10.605z" fill="#e1e6f0"/></g></svg>Guardar</button>
    </div>



    </form>
</div>


@include('livewire.table5')
