<?php

namespace App\Http\Livewire;

use App\Models\Inventario;
use Illuminate\Auth\Events\Validated;
use Livewire\Component;

class InventarioComponent extends Component
{
    public $nombre,$sku,$cate,$stock,$medida;
    public function render()
    {
        $fro=Inventario::all();

        return view('livewire.inventario-component',compact('fro'));
    }
    protected $rules=[
        'nombre'=>'required',
        'sku'=>'required',
        'cate'=>'required',
        'stock'=>'required',
        'medida'=>'required',
    ];
    public function tejes(){
        $this->validate();
        Inventario::create([
            'nombre'=>$this->nombre,
            'sku'=>$this->sku,
            'cate'=>$this->cate,
            'stock'=>$this->stock,
            'medida'=>$this->medida
        ]);
        $this->reset(['sku','nombre','cate','stock','medida']);
        session()->flash('message', 'ok');
    }
}
