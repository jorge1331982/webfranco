<?php

namespace App\Http\Livewire;

use App\Models\Gasolina;
use App\Models\Rendimiento;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class RendimientoComponent extends Component
{
    public $fecha,$empleado,$kminicial,$kmfinal,$kilometraje,$costogas,$gasto,$gasolina_id,$litros;
    public function render()
    {
        $ret=Gasolina::all();
        $jak=DB::table('rendimientos')
        ->join('gasolinas','gasolinas.id','rendimientos.gasolina_id')
        ->select('*')
        ->get();
        return view('livewire.rendimiento-component',compact('ret','jak'));
    }
    protected $rules=[
        'fecha'=>'required',
        'empleado'=>'required',
        'kminicial'=>'required',
        'kmfinal'=>'required',
        'gasolina_id'=>'required',
        'litros'=>'required',

    ];
    public function rendi(){
        $this->validate();
        Rendimiento::create([
            'fecha'=>$this->fecha,
            'empleado'=>$this->empleado,
            'kminicial'=>$this->kminicial,
            'kmfinal'=>$this->kmfinal,
            'kilometraje'=>$this->kilometraje,
            'costogas'=>$this->costogas,
            'gasto'=>$this->gasto,
            'gasolina_id'=>$this->gasolina_id,
            'litros'=>$this->litros,

        ]);
        $this->reset(['fecha','empleado','kminicial','kmfinal','kilometraje','costogas','gasto','gasolina_id']);
        session()->flash('message','ok');
    }
}
