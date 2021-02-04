<div class="container">
     <form wire:submit.prevent="rendi">
         <div class="row">
             <div class="col-sm-6 form-group">
                <input type="text"  placeholder="Fecha" wire:model="fecha" required class="form-control">
             </div>
             <div class="col-sm-6 form-group">
                <input type="text"  placeholder="Nombre Empleado" wire:model="empleado" required class="form-control">
             </div>
             <div class="col-sm-6 form-group">
                <input type="number"  placeholder="Ingrese KILOMETRAJE INICIAL" wire:model="kminicial" required class="form-control">
             </div>
             <div class="col-sm-6 form-group">
                <input type="text"  placeholder="ingrese KILOMETRAJE FINAL" wire:model="kmfinal" required class="form-control">
             </div>
         </div>
     </form>
</div>
