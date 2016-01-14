<?php

use Illuminate\Database\Seeder;
//use Illuminate\Database\Eloquent\Model;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('users')->delete();

        User::create(array(
            'name' => 'juan',
            'last_name' => 'orjuela',
            'email' => 'j.j.o.c007@gmail.com',
            'address' => 'cra calle',
            'username' => 'jjoc007',
            'phone' => 123456789,
            'level' => 0,
            'password' => Hash::make('123')
            ));    

        User::create(array(
            'name' => 'jose',
            'last_name' => 'orjuela',
            'email' => 'jjorjuelac@correo.udistrital.edu.co',
            'address' => 'cra calle',
            'phone' => 123456789,
            'username' => 'jjoc008',
            'level' => 0,
            'password' => Hash::make('123')
            ));


    }
}
