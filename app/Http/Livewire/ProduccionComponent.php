<?php

namespace App\Http\Livewire;

use App\Models\Produccion;
use App\Models\Venta;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ProduccionComponent extends Component
{
    public $fechaP,$folio,$tipo_unidad,$marca,$modelo,$year,$serie,$tipo_trabajo,$serie_caja,$venta_id;

    public function render()
    {
        $prod=Venta::all();
        $mer=DB::table('produccions')
        ->join('ventas','ventas.id','produccions.venta_id')
        ->select('*')
        ->get();

        return view('livewire.produccion-component',compact('prod','mer'));
    }
    protected $rules =[
        'fechaP'=>'required',
        'folio'=>'required',
        'tipo_unidad'=>'required',
        'marca'=>'required',
        'modelo'=>'required',
        'year'=>'required',
        'serie'=>'required',
        'tipo_trabajo'=>'required',
        'serie_caja'=>'required',
        'venta_id' =>'required',


    ];
    public function derek(){
        $this->validate();
        Produccion::create([
            'fechaP'=>$this->fechaP,
            'folio'=>$this->folio,
            'tipo_unidad' =>$this->tipo_unidad,
            'marca' =>$this->marca,
            'modelo' =>$this->modelo,
            'year' =>$this->year,
            'serie' =>$this->serie,
            'tipo_trabajo' =>$this->tipo_trabajo,
            'serie_caja' =>$this->serie_caja,
            'venta_id'=>$this->venta_id,

        ]);
        $this->reset(['fechaP','folio','tipo_unidad','marca','modelo','year','serie','tipo_trabajo','serie_caja','venta_id']);
        session()->flash('message', 'ok');
    }
}
