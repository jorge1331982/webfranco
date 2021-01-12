<?php

namespace App\Http\Livewire;

use App\Models\Compra;
use Livewire\Component;

class CompraComponent extends Component
{
    public $fechac,$Ocompra,$provedorc,$nombreM,$cantidadM,$fechaLL,$precio;
    public function render()
    {
        $rvt=Compra::all();
        return view('livewire.compra-component',compact('rvt'));
    }
    protected $rules=[
        'fechac'=>'required',
        'Ocompra'=>'required',
        'provedorc'=>'required',
        'nombreM'=>'required',
        'cantidadM'=>'required',
        'fechaLL'=>'required',
        'precio'=>'required',

    ];
    public function rex(){
        $this->validate();
        Compra::create([
            'fechac'=>$this->fechac,
            'Ocompra'=>$this->Ocompra,
            'provedorc'=>$this->provedorc,
            'nombreM'=>$this->nombreM,
            'cantidadM'=>$this->cantidadM,
            'fechaLL'=>$this->fechaLL,
            'precio'=>$this->precio,

        ]);
        $this->reset(['fechac','Ocompra','provedorc','nombreM','cantidadM','fechaLL','precio']);
        session()->flash('message', 'ok');
    }
}
