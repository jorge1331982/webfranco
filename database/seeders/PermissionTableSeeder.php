<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name'=>'venta.index']);
        Permission::create(['name'=>'venta.create']);
        Permission::create(['name'=>'venta.read']);
        Permission::create(['name'=>'venta.update']);

        Permission::create(['name'=>'piso.index']);
        Permission::create(['name'=>'piso.create']);
        Permission::create(['name'=>'piso.read']);
        Permission::create(['name'=>'piso.update']);

        Permission::create(['name'=>'almacen.index']);
        Permission::create(['name'=>'almacen.create']);
        Permission::create(['name'=>'almacen.read']);
        Permission::create(['name'=>'almacen.update']);

        Permission::create(['name'=>'user.index']);
        Permission::create(['name'=>'user.create']);
        Permission::create(['name'=>'user.read']);
        Permission::create(['name'=>'user.update']);

        Permission::create(['name'=>'compras.index']);
        Permission::create(['name'=>'compras.create']);
        Permission::create(['name'=>'compras.read']);
        Permission::create(['name'=>'compras.update']);

        Permission::create(['name'=>'gasolina.index']);
        Permission::create(['name'=>'gasolina.create']);
        Permission::create(['name'=>'gasolina.read']);
        Permission::create(['name'=>'gasolina.update']);

        $role=Role::create(['name'=>'oficinas']);
        $role->givePermissionTo('compras.index');
        $role->givePermissionTo('compras.create');
        $role->givePermissionTo('compras.read');
        $role->givePermissionTo('compras.update');


        $role=Role::create(['name'=>'asesor']);
        $role->givePermissionTo('venta.index');
        $role->givePermissionTo('venta.create');
        $role->givePermissionTo('venta.read');
        $role->givePermissionTo('venta.update');

        $role=Role::create(['name'=>'check']);
        $role->givePermissionTo('gasolina.index');
        $role->givePermissionTo('gasolina.create');
        $role->givePermissionTo('gasolina.read');
        $role->givePermissionTo('gasolina.update');


        $role=Role::create(['name'=>'admin']);
        $role->givePermissionTo('venta.index');
        $role->givePermissionTo('venta.create');
        $role->givePermissionTo('venta.read');
        $role->givePermissionTo('venta.update');
        $role->givePermissionTo('piso.index');
        $role->givePermissionTo('piso.create');
        $role->givePermissionTo('piso.read');
        $role->givePermissionTo('piso.update');
        $role->givePermissionTo('almacen.index');
        $role->givePermissionTo('almacen.create');
        $role->givePermissionTo('almacen.read');
        $role->givePermissionTo('almacen.update');
        $role->givePermissionTo('compras.index');
        $role->givePermissionTo('compras.create');
        $role->givePermissionTo('compras.read');
        $role->givePermissionTo('compras.update');
        $role->givePermissionTo('gasolina.index');
        $role->givePermissionTo('gasolina.create');
        $role->givePermissionTo('gasolina.read');
        $role->givePermissionTo('gasolina.update');



        $role=Role::create(['name'=>'produccion']);
        $role->givePermissionTo('piso.index');
        $role->givePermissionTo('piso.create');
        $role->givePermissionTo('piso.read');
        $role->givePermissionTo('piso.update');

        $role=Role::create(['name'=>'almacen']);
        $role->givePermissionTo('almacen.index');
        $role->givePermissionTo('almacen.create');
        $role->givePermissionTo('almacen.read');
        $role->givePermissionTo('almacen.update');


        $role=Role::create(['name'=>'super-admin']);
        $role->givePermissionTo(Permission::all());
        $role->givePermissionTo('user.index');
        $role->givePermissionTo('user.create');
        $role->givePermissionTo('user.read');
        $role->givePermissionTo('user.update');








    }
}
