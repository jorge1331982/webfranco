<?php

namespace App\Http\Livewire;

use App\Models\Produccion;
use App\Models\Salida;
use App\Models\Venta;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SalidaComponent extends Component
{
    public $quien_entrega,$quien_recibe,$revision_calidad,$vobo_salida,$venta_id,$produccion_id,$fecha;
    public function render()
    {

        $tor=Venta::all();
        $rex=Produccion::all();
        $met=Salida::all();
        //$data=array("lista_venta"=>$red,"lista_prod"=>$ros,"lista_salidas"=>$met);
        $jut=DB::table('salidas')
        ->join('ventas','ventas.id','salidas.venta_id')
        ->join('produccions','produccions.id','salidas.produccion_id')
        ->select('*')
        ->get();
        return view('livewire.salida-component',compact('jut','tor','rex'));
    }

    protected $rules =[
        'quien_entrega' =>'required',
        'quien_recibe' =>'required',
        'revision_calidad' =>'required',
        'vobo_salida' =>'required',
        'venta_id' =>'required',
        'produccion_id' =>'required',
        'fecha'=>'required'
    ];
    public function dass(){
        $this->validate();
        Salida::create([
            'quien_entrega'=>$this->quien_entrega,
            'quien_recibe'=>$this->quien_recibe,
            'revision_calidad'=>$this->revision_calidad,
            'vobo_salida'=>$this->vobo_salida,
            'venta_id'=>$this->venta_id,
            'produccion_id'=>$this->produccion_id,
            'fecha'=>$this->fecha,
        ]);

        $this->reset(['quien_entrega','quien_recibe','revision_calidad','vobo_salida','venta_id','produccion_id','fecha']);
        session()->flash('message', 'Datos Guardados Correctamente.');

    }
}
