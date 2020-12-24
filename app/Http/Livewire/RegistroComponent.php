<?php

namespace App\Http\Livewire;

use App\Models\Registro;
use Livewire\Component;

class RegistroComponent extends Component
{
    public $fecha,$cotizacion,$id_cliente,$empresa,$contacto,$telefono1,$tipo_unidad,$correo,$medio,$asesor,$tipo_servicio,$productos;
    public function render()
    {
        $reg=Registro::all();
        return view('livewire.registro-component',compact('reg'));
    }
    protected $rules=[
        'fecha'=>'required',
        'cotizacion'=>'required',
        'id_cliente'=>'required',
        'empresa'=>'required',
        'contacto'=>'required',
        'telefono1'=>'required',
        'tipo_unidad'=>'required',
        'correo'=>'required',
        'medio'=>'required',
        'asesor'=>'required',
        'tipo_servicio'=>'required',
        'productos'=>'required',
    ];
    public function ingreso(){
        $this->validate();

        Registro::create([
         'fecha'=>$this->fecha,
         'cotizacion'=>$this->cotizacion,
         'id_cliente'=>$this->id_cliente,
         'empresa'=>$this->empresa,
         'contacto'=>$this->contacto,
         'telefono1'=>$this->telefono1,
         'tipo_unidad'=>$this->tipo_unidad,
         'correo'=>$this->correo,
         'medio'=>$this->medio,
         'asesor'=>$this->asesor,
         'tipo_servicio'=>$this->tipo_servicio,
         'productos'=>$this->productos,

        ]);
        $this->reset(['cotizacion','fecha','id_cliente','empresa','contacto','telefono1','tipo_unidad','correo','medio','asesor','tipo_servicio','productos']);
        session()->flash('message', 'Datos Guardados Correctamente.');
    }
}
