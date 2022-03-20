<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Juan Cardenas",
            'email' => "juan.cardenas@autonoma.edu.co",
            'password' => Hash::make('hola1234'),
        ]);
        DB::table('users')->insert([
            'name' => "Don Asistente",
            'email' => "asistente@autonoma.edu.co",
            'password' => Hash::make('hola1234'),
        ]);
        DB::table('users')->insert([
            'name' => "Diseñador",
            'email' => "diseño@autonoma.edu.co",
            'password' => Hash::make('hola1234'),
        ]);

        DB::table('users')->insert([
            'name' => "manuel",
            'email' => "manuel@autonoma.edu.co",
            'password' => Hash::make('hola1234'),
        ]);
    }
}
