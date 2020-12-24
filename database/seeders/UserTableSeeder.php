<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $asesor=User::create([
            'name'=>'asesor',
            'email'=>'asesor@gmail.com',
            'password'=>bcrypt('david133'),

        ]);
         $asesor->assignRole('asesor');

         //usuario piso
         $piso=User::create([
            'name'=>'piso',
            'email'=>'piso@gmail.com',
            'password'=>bcrypt('david133'),

        ]);
         $piso->assignRole('produccion');

         //usuario almacen
         $almacen=User::create([
            'name'=>'almacen',
            'email'=>'almacen@gmail.com',
            'password'=>bcrypt('david133'),

        ]);
         $almacen->assignRole('almacen');

         //user admin
         $admin=User::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('david133'),

        ]);
         $admin->assignRole('admin');

         //super-admin user
         $super=User::create([
            'name'=>'super-admin',
            'email'=>'super-admin@gmail.com',
            'password'=>bcrypt('david133'),

        ]);
         $super->assignRole('super-admin');
    }
}
