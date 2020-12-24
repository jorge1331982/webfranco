<?php

namespace App\Http\Controllers;


use App\Models\Cotizacon;
use App\Models\Registro;
use App\Models\Seguimiento;
use App\Models\Venta;
use Illuminate\Http\Request;
use  Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function cotizacion(){
        $fer=Cotizacon::all();
        return view('ventas.cotizacion',compact('fer'));
    }
     public function cotizaform(Request $request){
        $request->validate([
            'producto' => 'required',
            'asesor' => 'required',
            'imagen' => 'required',
            'fecha'  =>'required',
            'folio'  =>'required',
            'n_cliente'  =>'required',
            'correo'  =>'required',
            'telefono'  =>'required',
            'largo' => 'required',
            'ancho' => 'required',
            'alto' => 'required',
            'sugeridos'  =>'required',
            'calibres'  =>'required',
            'intandext'  =>'required',
            'techo'  =>'required',
            'precio'  =>'required',
            'accesorios'  =>'required',
            'copete'  =>'required',
            'tipo'  =>'required',


        ]);
        $entrada = $request->all();
          if($archivo=$request->file('imagen')){

            $nombre = $archivo->getClientOriginalName();
            $archivo->move('img', $nombre);
            $entrada['imagen']=$nombre;
          }

           Cotizacon::create($entrada);
           return redirect()->route('cotiza')->with('mensaje','Datos Guardados Correctamente');

    }


    public function detalle($id){
        $nota = Cotizacon::findOrFail($id);
        $pdfe = PDF::loadView('pdf.reporte',compact('nota'));
         return $pdfe->stream('productos.pdf');
        //vista de la ruta pdf.ventas
    }
    //vista detalle de cotizacion
    public function detallecotizacion($id){
        $nota = Cotizacon::findOrFail($id);
        return view('ventas.detalle', compact('nota'));
    }
    public function grafico(){
        $jus =Registro::all();
        $her=Venta::all();
        $mer = Seguimiento::all();
        return view('grafico',compact('jus','her','mer'));
    }


}
