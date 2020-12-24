<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;


class UserController extends Controller
{
    public function index(){
        $user=User::all();
        return view('users.index',compact('user'));
    }
    public function doke(){
        $roles=Role::all()->pluck('name','id');

        return view('users.create',compact('roles'));
    }

    public function crea(Request $request){
        $usuario= new User();

        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->password = bcrypt($request->password);

        if($usuario->save()){
            //asignar el rol del usuario
            $usuario->assignRole($request->rol);
            $roles=Role::all()->pluck('name','id');

            return redirect('usuarios')->with('mensaje','Usuario Creado');
        }
    }


}
