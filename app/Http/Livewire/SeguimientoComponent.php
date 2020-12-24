<?php

namespace App\Http\Livewire;

use App\Models\Registro;
use App\Models\Seguimiento;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SeguimientoComponent extends Component
{
    public $registro_id,$fech,$aseso,$status,$comentarios;
    public function render()
    {
        $entrada=Registro::all();
        $der=DB::table('seguimientos')
        ->join('registros','registros.id','=','seguimientos.registro_id')
         ->select('*')
         ->get();
        return view('livewire.seguimiento-component',compact('entrada','der'));
    }
    protected $rules =[
        'fech'=>'required',
        'registro_id' =>'required',
        'aseso' =>'required',
        'comentarios' =>'required',
        'status'  =>'required'
    ];
    public function submi(){
        $this->validate();

        Seguimiento::create([
          'fech' =>$this->fech,
          'status' =>$this->status,
          'comentarios' =>$this->comentarios,
          'aseso'  =>$this->aseso,
          'registro_id'  =>$this->registro_id,

          ]);
          $this->reset(['fech','status','comentarios','aseso','registro_id']);
          session()->flash('message', 'Datos Guardados Correctamente.');
    }
}
