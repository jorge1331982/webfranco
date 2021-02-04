<?php

namespace App\Http\Livewire;

use App\Models\LLamada;
use Livewire\Component;

class LlamadaComponent extends Component
{
    public $fecha,$empresa,$contacto,$telefono,$correo,$medio,$requerimiento,$comentario,$asesor;
    public function render()
    {
        $red=LLamada::all();
        return view('livewire.llamada-component',compact('red'));
    }
    protected $rules=[
        'fecha'=>'required',
        'empresa'=>'required',
        'contacto'=>'required',
        'requerimiento'=>'required',
        'comentario'=>'required',
        'asesor'=>'required'

    ];
    public function dor(){
        $this->validate();
        LLamada::create([
          'fecha'=>$this->fecha,
          'empresa'=>$this->empresa,
          'contacto'=>$this->contacto,
          'telefono'=>$this->telefono,
          'correo'=>$this->correo,
          'medio'=>$this->medio,
          'requerimiento'=>$this->requerimiento,
          'comentario'=>$this->comentario,
          'asesor'=>$this->asesor,
        ]);
        $this->reset(['fecha','empresa','contacto','telefono','correo','medio','requerimiento','comentario','asesor']);
        session()->flash('message','ok');
    }
}
