<div class="container">
    @if (session('message')=='ok'){
        <script>
           Swal.fire({
           position: 'top-end',
           icon: 'info',
           title: 'Datos Guardados Correctamente !!!',
           showConfirmButton: false,
           timer: 2000
             })
        </script>


    @endif

   <form wire:submit.prevent="envi">
      <div class="row">
          <div class=" form-group col-md-6">
             <input type="date" wire:model="fecha" class="form-control" required>
          </div>
          <div class=" form-group col-md-6">
            <select wire:model="venta_id" class="form-control" required>
                <option selected>Seleccione Orden de Produccion</option>
              @foreach($prod as $t)
                <option value="{{$t->id}}" >{{$t->Oservicio}}</option>
                @endforeach
              </select>
         </div>
      </div>

      <div class="row">
          <div class="form-group col-md-12">
            <select name="" id="qq" wire:model="inventario_id" class="form-control">
                <option >Seleccione Nombre del Producto</option>
              @foreach ($ret as $c)
                  <option value="{{$c->id}}">{{$c->nombre}}</option> <!--referencia del trigger restar cantidadd-->
              @endforeach
            </select>
          </div>


      </div>
      <div class="row">
          <div class="form-group col-md-6">
           <select name="" id="ttt" wire:model="categoria" class="form-control">
               <option >Seleccione una categoria</option>
             @foreach ($ret as $i)
                 <option>{{$i->cate}}</option>
             @endforeach
           </select>
          </div>
          <div class="form-group col-md-6">
            <select name="" id="fff" wire:model="medida" class="form-control">
                <option >Seleccione un Tipo de Medida</option>
              @foreach ($ret as $k)
                  <option>{{$k->medida}}</option>
              @endforeach
            </select>
          </div>
      </div>
      <div class="row">
          <div class="form-group col-md-6">
            <input type="text" placeholder="Nombre del Solicitante" wire:model="sku" required class="form-control">
          </div>
          <div class="form-group col-md-6">
            <input type="text" placeholder="cantidad" wire:model="cantidad" required class="form-control">
          </div>
      </div>
      <div  class="d-flex justify-content-center">
        <button class="btn btn-primary btn-block mt-2 mb-5 " type="submit"><svg  id="Capa_1" enable-background="new 0 0 512 512" height="30" viewBox="0 0 512 512" width="30" xmlns="http://www.w3.org/2000/svg"><g><path d="m256 0c-140.7 0-256 115.3-256 256s115.3 256 256 256 256-115.3 256-256-115.3-256-256-256z" fill="#f3f5f9"/><path d="m512 256c0 140.7-115.3 256-256 256v-512c140.7 0 256 115.3 256 256z" fill="#e1e6f0"/><circle cx="256" cy="256" fill="#a0e65c" r="226"/><path d="m482 256c0 124.2-101.8 226-226 226v-452c124.2 0 226 101.8 226 226z" fill="#79cc52"/><path d="m372.675 196.747-42.437-42.422c-5.859-5.859-15.352-5.859-21.211 0l-53.027 53.037-30 30.005-23.042-23.042c-5.859-5.859-15.352-5.859-21.211 0l-42.422 42.422c-5.859 5.859-5.859 15.352 0 21.211l76.069 76.069c2.93 2.93 6.768 4.395 10.605 4.395s7.676-1.465 10.605-4.395l19.396-19.394 116.675-116.675c2.813-2.813 4.395-6.621 4.395-10.605s-1.583-7.793-4.395-10.606z" fill="#f3f5f9"/><path d="m377.069 207.353c0-3.984-1.582-7.793-4.395-10.605l-42.437-42.422c-5.859-5.859-15.352-5.859-21.211 0l-53.026 53.036v127.271l116.675-116.675c2.812-2.812 4.394-6.621 4.394-10.605z" fill="#e1e6f0"/></g></svg>Guardar</button>
       </div>
   </form>
</div>
@include('livewire.table7')
