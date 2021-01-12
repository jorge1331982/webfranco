<div>

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
    }

    @endif





  <div class="container">
    <form wire:submit.prevent="submi" class="formulario-seguimiento">

  <div class="form-row">
  <div class="form-group col-md-6">
      <select  wire:model="registro_id" class="form-control" required>
        <option selected>COTIZACION</option>
        @foreach($entrada as $j)
        <option value="{{$j->id}}">{{$j->cotizacion}}</option>
        @endforeach
      </select>
    </div>

    <div class="form-group col-md-6">
      <input type="date" class="form-control" placeholder="Fecha" wire:model="fech" required>
      @error('date')<span class="error text-white"></span>@enderror
    </div>

    <div class="form-group col-md-6">
    <select wire:model="aseso" class="form-control" required>
        <option selected>ASESOR</option>
        <option>Juan Carlos Villicaña</option>
        <option>Monserrat Villicaña</option>
        <option>Miguel Franco</option>
        <option>Monserrath Mohedano</option>
      </select>
    </div>

    <div class="form-group col-md-6">
      <select wire:model="status" class="form-control" required>
        <option selected>STATUS</option>
        <option>Seguimiento</option>
        <option>Pendiente</option>
        <option>Venta</option>
      </select>
    </div>

    <textarea wire:model="comentarios"  cols="90" rows="3" placeholder="comentarios" class="mb-3" required>
        @error('comentarios')<span class="error text-white"></span>@enderror
    </textarea>

  </div>

  <div  class="d-flex justify-content-center">
 <button class="btn btn-primary btn-block my-2" type="submit"><svg id="Capa_1" enable-background="new 0 0 512 512" height="30" viewBox="0 0 512 512" width="30" xmlns="http://www.w3.org/2000/svg"><g><path d="m256 0c-140.7 0-256 115.3-256 256s115.3 256 256 256 256-115.3 256-256-115.3-256-256-256z" fill="#f3f5f9"/><path d="m512 256c0 140.7-115.3 256-256 256v-512c140.7 0 256 115.3 256 256z" fill="#e1e6f0"/><circle cx="256" cy="256" fill="#a0e65c" r="226"/><path d="m482 256c0 124.2-101.8 226-226 226v-452c124.2 0 226 101.8 226 226z" fill="#79cc52"/><path d="m372.675 196.747-42.437-42.422c-5.859-5.859-15.352-5.859-21.211 0l-53.027 53.037-30 30.005-23.042-23.042c-5.859-5.859-15.352-5.859-21.211 0l-42.422 42.422c-5.859 5.859-5.859 15.352 0 21.211l76.069 76.069c2.93 2.93 6.768 4.395 10.605 4.395s7.676-1.465 10.605-4.395l19.396-19.394 116.675-116.675c2.813-2.813 4.395-6.621 4.395-10.605s-1.583-7.793-4.395-10.606z" fill="#f3f5f9"/><path d="m377.069 207.353c0-3.984-1.582-7.793-4.395-10.605l-42.437-42.422c-5.859-5.859-15.352-5.859-21.211 0l-53.026 53.036v127.271l116.675-116.675c2.812-2.812 4.394-6.621 4.394-10.605z" fill="#e1e6f0"/></g></svg>Guardar</button>
 </div>
</form>
</div>

@include("livewire.table2")
</div>
