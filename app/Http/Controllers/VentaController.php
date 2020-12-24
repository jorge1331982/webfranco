<?php

namespace App\Http\Controllers;

use App\Events\VentaEvent;
use App\Models\Salida;
use App\Models\User;
use App\Models\Venta;
use App\Notifications\VentaNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return redirect()->back()->with('message','GOOD SUCCESS');

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


}
