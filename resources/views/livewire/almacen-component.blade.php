<div class="container">
<form wire:submit.prevent="almacen" class="formulario555000">
    <div class="form-row">
  <div class="form-group col-md-6">
    <input type="date" class="form-control" placeholder="Ingrese Fecha" wire:model="fecha" required>
    @error('fecha')<span class="error text-white"></span>@enderror
  </div>

  <div class="form-group col-md-6">
    <select wire:model="venta_id" class="form-control" required>
      <option selected>Orden de trabajo</option>
      @foreach($rek as $T)
      <option value="{{$T->id}}">{{ $T->Oservicio }}</option>
  @endforeach
    </select>
  </div>


  <div class="form-group col-md-12">
    <input type="text" class="form-control" placeholder="SKU PRODUCTO" wire:model="sku" required>
    @error('sku')<span class="error text-white"></span>@enderror
  </div>

  <div class="form-group col-md-12">
     <select wire:model="categoria" class="form-control" required>
       <option selected>Categoria</option>
       <option>tornillos</option>
       <option>laminas</option>
       <option>aluminio</option>

     </select>
   </div>
</div>
<div class="form-row">
  <div class="form-group col-md-6">
    <input type="text" class="form-control" placeholder="Nombre Producto" wire:model="nombreP" required>
    @error('nombreP')<span class="error text-white"></span>@enderror
  </div>

  <div class="form-group col-md-6">
    <input type="text" class="form-control" placeholder="Medida del Producto" wire:model="medida" required>
    @error('medida')<span class="error text-white"></span>@enderror
   </div>
   <div class="form-group col-md-12">
     <input type="text" class="form-control" placeholder="Cantidad / Pzas" wire:model="cantidad" required>
     @error('cantidad')<span class="error text-white"></span>@enderror
   </div>



  </div>

  <div  class="d-flex justify-content-center">
   <button class="btn btn-primary btn-block mt-2 mb-5 " type="submit"><svg  id="Capa_1" enable-background="new 0 0 512 512" height="30" viewBox="0 0 512 512" width="30" xmlns="http://www.w3.org/2000/svg"><g><path d="m256 0c-140.7 0-256 115.3-256 256s115.3 256 256 256 256-115.3 256-256-115.3-256-256-256z" fill="#f3f5f9"/><path d="m512 256c0 140.7-115.3 256-256 256v-512c140.7 0 256 115.3 256 256z" fill="#e1e6f0"/><circle cx="256" cy="256" fill="#a0e65c" r="226"/><path d="m482 256c0 124.2-101.8 226-226 226v-452c124.2 0 226 101.8 226 226z" fill="#79cc52"/><path d="m372.675 196.747-42.437-42.422c-5.859-5.859-15.352-5.859-21.211 0l-53.027 53.037-30 30.005-23.042-23.042c-5.859-5.859-15.352-5.859-21.211 0l-42.422 42.422c-5.859 5.859-5.859 15.352 0 21.211l76.069 76.069c2.93 2.93 6.768 4.395 10.605 4.395s7.676-1.465 10.605-4.395l19.396-19.394 116.675-116.675c2.813-2.813 4.395-6.621 4.395-10.605s-1.583-7.793-4.395-10.606z" fill="#f3f5f9"/><path d="m377.069 207.353c0-3.984-1.582-7.793-4.395-10.605l-42.437-42.422c-5.859-5.859-15.352-5.859-21.211 0l-53.026 53.036v127.271l116.675-116.675c2.812-2.812 4.394-6.621 4.394-10.605z" fill="#e1e6f0"/></g></svg>Guardar</button>
  </div>
    </form>

</div>

@include('livewire.table7')
