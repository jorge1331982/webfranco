<?php

namespace App\Http\Livewire;

use App\Models\Dato;
use App\Models\Register;
use Livewire\Component;

class DatosclienteComponent extends Component
{
     public $fechaB,$asesor,$ordenP,$factura,$metodoP,$formaP,$cfdi,$precioN,$dato_id,$producto;
    public function render()

    {
        $rou=Dato::all();
        return view('livewire.datoscliente-component',compact('rou'));
    }
    protected $rules=[
        'fechaB'=>'required',
        'asesor'=>'required',
        'ordenP'=>'required',
        'factura'=>'required',
        'metodoP'=>'required',
        'formaP'=>'required',
        'cfdi'=>'required',
        'precioN'=>'required',
        'dato_id'=>'required',
        'producto'=>'required'
    ];
    public function rote(){
        $this->validate();
        Register::create([
            'fechaB'=>$this->fechaB,
            'asesor'=>$this->asesor,
            'ordenP'=>$this->ordenP,
            'factura'=>$this->factura,
            'metodoP'=>$this->metodoP,
            'formaP'=>$this->formaP,
            'cfdi'=>$this->cfdi,
            'precioN'=>$this->precioN,
            'dato_id'=>$this->dato_id,
            'producto'=>$this->producto
        ]);
        $this->reset(['fechaB','asesor','ordenP','factura','metodoP','formaP','cfdi','precioN','dato_id','producto']);
        session()->flash('message','ok');
    }

}
