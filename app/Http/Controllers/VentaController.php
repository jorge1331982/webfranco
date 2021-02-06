<?php

namespace App\Http\Controllers;

use App\Events\VentaEvent;
use App\Models\Control;
use App\Models\Dato;
use App\Models\Pago;
use App\Models\Regi;
use App\Models\Registo;
use App\Models\Salida;
use App\Models\User;
use App\Models\Venta;
use App\Notifications\VentaNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VentaController extends Controller
{
    public function ref(){
        $mel=Venta::all();
        return view('venta.reg',compact('mel'));
    }
     //controlador notificaciones
    public function end(Request $request){
        $data= $request->all();
        $data['user_id']=Auth::id();
        $post=Venta::create($data);

        event(new VentaEvent($post));
        return redirect()->back()->with('message','Datos Guardados ok !!!');

    }

    public function lerrnotificacion(){
        $ventanotifica=auth()->user()->unreadNotifications;
        return view('notifica',compact('ventanotifica'));
    }

    public function mensaje(Request $request){
        auth()->user()->unreadNotifications
        ->when($request->input('id'),function($query)use($request){
            return $query->where('id',$request->input('id'));
        })->markAsRead();
        return response()->noContent();
    }

    //controlador registro-pagos administracion

    public function mor(){
        $tor=Dato::all();
        $fro=DB::table('regis')
        ->join('datos','datos.id','regis.dato_id')
        ->select('*')
        ->get();
       return view('administracion.Rpago',compact('tor','fro'));
    }
    public function jake(Request $request){
       $request->validate([
           'fechaA'=>'required',
           'asesor'=>'required',
           'ordenP'=>'required',
           'formaP'=>'required',
           'metodoP'=>'required',
           'precioN'=>'required',
           'serieU'=>'required',
           'serieC'=>'required',
           'facturaR'=>'required',
           'dato_id'=>'required',
           'producto'=>'required'

       ]);
       $registro=Regi::create($request->all());
       return redirect()->route('Rpago',$registro)->with('message','Datos Guardados Corredctamente !!');
    }

    //controlador abonos-administracion
    public function fro(){
        $tro=Dato::all();
        $ros=Regi::all();
        $rex=DB::table('pagos')
        ->join('datos','datos.id','pagos.dato_id')
        ->join('regis','regis.id','pagos.regi_id')
        ->select('*')
        ->get();
        return view('administracion.pago',compact('tro','ros','rex'));
    }

    public function dames(Request $request){
        $request->validate([
            'fechaB'=>'required',
            'anticipo'=>'required',
            'razonsocial2'=>'required',
            'dato_id'=>'required',
            'regi_id'=>'required',
        ]);
        $mart=Pago::create($request->all());
        return redirect()->back()->with('message','Datos Guardados Correctamente',compact('mart'));
    }
    public function detalle($id){
        $rego = Registo::findOrFail($id);


        return view('alchichica.detallado', compact('rego'));
    }





}
