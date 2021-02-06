<?php

namespace App\Http\Livewire;

use App\Models\Control;
use App\Models\Registo;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SiguienteComponent extends Component
{
    public $fecha,$mes,$vendedor,$control_id,$empresa,$seriep,$cliente,$producto,$estatus,$fechaentradaProduccion,$fechaProgramadaEntrega,$fechaEntrega;
    public function render()
    {
        $res=Control::all();
        $rex=DB::table('registos')
        ->join('controls','controls.id','registos.control_id')
        ->select('*')
        ->get();

        return view('livewire.siguiente-component',compact('rex','res'));
    }
    protected $rules=[
        'fecha'=>'required',
        'mes'=>'required',
        'vendedor'=>'required',
        'control_id'=>'required',
        'empresa'=>'required',
        'seriep'=>'required',
        'cliente'=>'required',
        'producto'=>'required',
        'estatus'=>'required',
        'fechaentradaProduccion'=>'required',
        'fechaProgramadaEntrega'=>'required',
        'fechaEntrega'=>'required',

    ];
    public function fer(){
        $this->validate();
        Registo::create([
            'fecha'=>$this->fecha,
            'mes'=>$this->mes,
            'vendedor'=>$this->vendedor,
            'control_id'=>$this->control_id,
            'empresa'=>$this->empresa,
            'seriep'=>$this->seriep,
            'cliente'=>$this->cliente,
            'producto'=>$this->producto,
            'estatus'=>$this->estatus,
            'fechaentradaProduccion'=>$this->fechaentradaProduccion,
            'fechaProgramadaEntrega'=>$this->fechaProgramadaEntrega,
            'fechaEntrega'=>$this->fechaEntrega,
        ]);
        $this->reset(['fecha','mes','vendedor','control_id','empresa','seriep','cliente','producto','estatus','fechaentradaProduccion','fechaProgramadaEntrega','fechaEntrega']);
        session()->flash('message','ok');
    }
}
