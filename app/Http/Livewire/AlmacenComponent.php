<?php

namespace App\Http\Livewire;

use App\Models\Almacen;
use App\Models\Inventario;
use App\Models\Venta;
use Illuminate\Support\Facades\DB;
use Livewire\Component;


class AlmacenComponent extends Component
{
    public $fecha,$sku,$categoria,$cantidad,$medida,$venta_id,$inventario_id;

    public function render()
    {
        $ret=Inventario::all();
        $prod=Venta::all();
        $jose=DB::table('almacens')
        ->join('ventas','ventas.id','almacens.venta_id')
        ->join('inventarios','inventarios.id','almacens.inventario_id')
        ->select('*')
        ->get();
        return view('livewire.almacen-component',compact('prod','jose','ret'));
    }
    protected $rules=[
        'fecha'=>'required',
        'sku'=>'required',
        'categoria'=>'required',
        'cantidad'=>'required',
        'medida'=>'required',
        'venta_id'=>'required',
        'inventario_id'=>'required',
    ];
    public function envi(){
        $this->validate();
        Almacen::create([
            'fecha'=>$this->fecha,
            'sku'=>$this->sku,
            'categoria'=>$this->categoria,
            'cantidad'=>$this->cantidad,
            'medida'=>$this->medida,
            'venta_id'=>$this->venta_id,
            'inventario_id'=>$this->inventario_id,

        ]);
        $this->reset(['fecha','sku','categoria','medida','cantidad','venta_id','inventario_id']);
        session()->flash('message', 'ok');
    }
}
