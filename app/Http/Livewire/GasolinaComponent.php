<?php

namespace App\Http\Livewire;

use App\Models\Gasolina;
use Livewire\Component;

class GasolinaComponent extends Component
{
    public $vehiculo,$modelo,$marca,$year,$placas;
    public function render()
    {
        $vehi=Gasolina::all();
        return view('livewire.gasolina-component',compact('vehi'));
    }
    protected $rules=[
        'vehiculo'=>'required',
        'modelo'=>'required',
        'marca'=>'required',
        'year'=>'required',
        'placas'=>'required',
    ];
    public function vehicu(){
        $this->validate();
        Gasolina::create([
            'vehiculo'=>$this->vehiculo,
            'modelo'=>$this->modelo,
            'marca'=>$this->marca,
            'year'=>$this->year,
            'placas'=>$this->placas,
        ]);
        $this->reset(['vehiculo','marca','modelo','year','placas']);
        session()->flash('message','ok');
    }
}
