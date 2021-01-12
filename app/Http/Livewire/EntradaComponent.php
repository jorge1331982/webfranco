<?php

namespace App\Http\Livewire;

use App\Models\Compra;
use App\Models\Entrada;
use App\Models\Inventario;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class EntradaComponent extends Component
{
      public $fecha,$provedor,$cantida,$comenta,$inventario_id,$compra_id;
    public function render()
    {
        $tr=Inventario::all();
        $ser=Compra::all();
        $rox=DB::table('entradas')
        ->join('inventarios','inventarios.id','entradas.inventario_id')
        ->join('compras','compras.id','entradas.compra_id')
        ->select('*')
        ->get();

        return view('livewire.entrada-component',compact('rox','ser','tr'));
    }
    protected $rules=[
        'fecha'=>'required',
        'provedor'=>'required',
        'cantida'=>'required',
        'comenta'=>'required',
        'inventario_id'=>'required',
        'compra_id'=>'required',

    ];
    public function indo(){
        $this->validate();
        Entrada::create([
            'fecha'=>$this->fecha,
            'provedor'=>$this->provedor,
            'cantida'=>$this->cantida,
            'comenta'=>$this->comenta,
            'inventario_id'=>$this->inventario_id,
            'compra_id'=>$this->compra_id,

        ]);
        $this->reset(['fecha','provedor','cantida','comenta','inventario_id','compra_id']);
        session()->flash('message', 'ok');
    }

}
