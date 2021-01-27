<?php

namespace App\Http\Livewire;

use App\Models\Dato;
use Livewire\Component;

class PagoComponent extends Component
{
    public $nombreC,$correo,$telefono,$calle,$num,$colonia,$mpio,$estado,$ciudad,$codigoP,$razonsocial;
    public function render()
    {
        $reg=Dato::all();
        return view('livewire.pago-component',compact('reg'));
    }
    protected $rules=[
        'nombreC'=>'required',
        'correo'=>'required',
        'telefono'=>'required',
        'calle'=>'required',
        'num'=>'required',
        'colonia'=>'required',
        'mpio'=>'required',
        'estado'=>'required',
        'ciudad'=>'required',
        'codigoP'=>'required',
        'razonsocial'=>'required',

    ];
    public function sero(){
        $this->validate();
        Dato::create([
            'nombreC'=>$this->nombreC,
            'correo'=>$this->correo,
            'telefono'=>$this->telefono,
            'calle'=>$this->calle,
            'num'=>$this->num,
            'colonia'=>$this->colonia,
            'mpio'=>$this->mpio,
            'estado'=>$this->estado,
            'ciudad'=>$this->ciudad,
            'codigoP'=>$this->codigoP,
            'razonsocial'=>$this->razonsocial,

        ]);
        $this->reset(['nombreC','correo','telefono','calle','num','colonia','mpio','ciudad','estado','codigoP','razonsocial',]);
        session()->flash('message','ok');
    }
}
