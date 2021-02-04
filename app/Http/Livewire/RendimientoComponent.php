<?php

namespace App\Http\Livewire;

use App\Models\Rendimiento;
use Livewire\Component;

class RendimientoComponent extends Component
{
    public $fecha,$empleado,$kminicial,$kmfinal,$kilometraje,$costogas,$gas;
    public function render()
    {
        return view('livewire.rendimiento-component');
    }
    protected $rules=[
        'fecha'=>'required',
        'empleado'=>'required',
        'kminicial'=>'required',
        'kmfinal'=>'required',
        'gas'=>'required',
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
            'gas'=>$this->gas,

        ]);
        $this->reset(['fecha','empleado','kminicial','kmfinal','kilometraje','costogas','gas']);
        session()->flash('message','ok');
    }
}
