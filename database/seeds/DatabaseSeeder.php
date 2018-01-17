<?php

use Illuminate\Database\Seeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('administrador')
        ->insert([
          'Id_empleado'=>'1',
          'Correo'=>'nemecio@yahoo.com',
          'Password'=>\Hash::make('hola')
          //'Password'=>'hola'
        ]);
    }
}
