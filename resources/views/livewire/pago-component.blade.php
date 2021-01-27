<div class="container">

    @if (session('message')=='ok')
    <script>
       Swal.fire({
       position: 'top-end',
       icon: 'success',
       title: 'Datos Guardados Correctamente !!!',
       showConfirmButton: false,
       timer: 2000
         });

    </script>

@endif
    <form wire:submit.prevent="sero">
        <div class="row">
            <div class="col-md-12 form-group">
               <input type="text" placeholder="ingrese nombre de cliente" required class="form-control" wire:model="nombreC">
            </div>
            <div class="col-md-6 form-group">
                <input type="mail" placeholder="ingrese correo del cliente" required class="form-control" wire:model="correo">
             </div>
             <div class="col-md-6 form-group">
                <input type="text" placeholder="ingrese telefono de cliente" required class="form-control" wire:model="telefono">
             </div>
             <div class="col-md-4 form-group">
                <input type="text" placeholder="calle" required class="form-control" wire:model="calle">
             </div>
             <div class="col-md-4 form-group">
                <input type="text" placeholder="num exterior y interior" required class="form-control" wire:model="num">
             </div>
             <div class="col-md-4 form-group">
                <input type="text" placeholder="colonia" required class="form-control" wire:model="colonia">
             </div>
             <div class="col-md-3 form-group">
                <input type="text" placeholder="Municipio /Delegacion" required class="form-control" wire:model="mpio">
             </div>
             <div class="col-md-3 form-group">
                <input type="text" placeholder="Estado" required class="form-control" wire:model="estado">
             </div>
             <div class="col-md-3 form-group">
                <input type="text" placeholder="Ciudad" required class="form-control" wire:model="ciudad">
             </div>
             <div class="col-md-3 form-group">
                <input type="text" placeholder="Codigo Postal" required class="form-control" wire:model="codigoP">
             </div>
             <div class="col-md-12 form-group">
                <input type="text" placeholder="Razon social del Cliente / RFC" required class="form-control" wire:model="razonsocial">
             </div>
        </div>
        <div  class="d-flex justify-content-center">
            <button class="btn btn-success btn-block mt-2 mb-5 " type="submit"><svg  id="Capa_1" enable-background="new 0 0 512 512" height="30" viewBox="0 0 512 512" width="30" xmlns="http://www.w3.org/2000/svg"><g><path d="m256 0c-140.7 0-256 115.3-256 256s115.3 256 256 256 256-115.3 256-256-115.3-256-256-256z" fill="#f3f5f9"/><path d="m512 256c0 140.7-115.3 256-256 256v-512c140.7 0 256 115.3 256 256z" fill="#e1e6f0"/><circle cx="256" cy="256" fill="#a0e65c" r="226"/><path d="m482 256c0 124.2-101.8 226-226 226v-452c124.2 0 226 101.8 226 226z" fill="#79cc52"/><path d="m372.675 196.747-42.437-42.422c-5.859-5.859-15.352-5.859-21.211 0l-53.027 53.037-30 30.005-23.042-23.042c-5.859-5.859-15.352-5.859-21.211 0l-42.422 42.422c-5.859 5.859-5.859 15.352 0 21.211l76.069 76.069c2.93 2.93 6.768 4.395 10.605 4.395s7.676-1.465 10.605-4.395l19.396-19.394 116.675-116.675c2.813-2.813 4.395-6.621 4.395-10.605s-1.583-7.793-4.395-10.606z" fill="#f3f5f9"/><path d="m377.069 207.353c0-3.984-1.582-7.793-4.395-10.605l-42.437-42.422c-5.859-5.859-15.352-5.859-21.211 0l-53.026 53.036v127.271l116.675-116.675c2.812-2.812 4.394-6.621 4.394-10.605z" fill="#e1e6f0"/></g></svg>Guardar</button>
           </div>
    </form>
</div>
@include('livewire.table11')
