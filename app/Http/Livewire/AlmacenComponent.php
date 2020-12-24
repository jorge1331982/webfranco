<?php

namespace App\Http\Livewire;

use App\Models\Almacen;
use App\Models\Venta;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AlmacenComponent extends Component
{
    public $fecha,$sku,$venta_id,$cantidad,$categoria,$medida,$nombreP;
    public function render()
    {
         $rek=Venta::all();
          $ger= DB::table('almacens')
          ->join('ventas','ventas.id','almacens.venta_id')
          ->select('*')
          ->get();

            return view('livewire.almacen-component',compact('rek','ger'));
    }
    protected $rules=[
        'fecha' =>'required',
        'sku' =>'required',
        'nombreP' =>'required',
        'medida' =>'required',
        'cantidad' =>'required',
        'categoria' =>'required',
        'venta_id' =>'required',
    ];
    public function almacen(){
        $this->validate();
        Almacen::create([
            'fecha' =>$this->fecha,
            'sku' =>$this->sku,
            'nombreP'=>$this->nombreP,
            'medida' =>$this->medida,
            'cantidad' =>$this->cantidad,
            'categoria' =>$this->categoria,
            'venta_id' =>$this->venta_id,
        ]);
        $this->reset(['fecha','sku','nombreP','medida','cantidad','categoria','venta_id']);
        session()->flash('message', 'Datos Guardados Correctamente.');
    }


}
