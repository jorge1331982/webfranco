<?php

namespace App\Http\Livewire;

use App\Models\Control;
use Livewire\Component;

class ControlComponent extends Component
{
    public $folio,$unidad,$largo,$ancho,$alto,$copete,$adicionales;
    public function render()
    {
        $tri=Control::all();
        return view('livewire.control-component',compact('tri'));
    }
    protected $rules=[

        'folio'=>'required',
        'unidad'=>'required',
        'largo'=>'required',
        'ancho'=>'required',
        'alto'=>'required',
        'copete'=>'required',
        'adicionales'=>'required',
    ];
    public function alchi(){
        $this->validate();
        Control::create([

            'folio'=>$this->folio,
            'unidad'=>$this->unidad,
            'largo'=>$this->largo,
            'ancho'=>$this->ancho,
            'alto'=>$this->alto,
            'copete'=>$this->copete,
            'adicionales'=>$this->adicionales,

        ]);
        $this->reset(['folio','unidad','alto','largo','ancho','copete','adicionales']);
        session()->flash('message','ok');
    }
}
