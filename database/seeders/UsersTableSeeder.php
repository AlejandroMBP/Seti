<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin 1',
            'email' => 'admin1@admin.com',
            'password' => Hash::make('123456789'),
            'estado'=> 1,
        ]);

        DB::table('users')->insert([
            'name' => 'Admin 2',
            'email' => 'admin2@admin.com',
            'password' => Hash::make('password'),
            'estado'=> 1,
        ]);
        DB::table('users')->insert([
            'name' => 'Admin 3',
            'email' => 'admin3@admin.com',
            'password' => Hash::make('123456789'),
            'estado'=> 1,
        ]);

        DB::table('users')->insert([
            'name' => 'Admin 4',
            'email' => 'admin4@admin.com',
            'password' => Hash::make('password'),
            'estado'=> 1,
        ]);
        DB::table('users')->insert([
            'name' => 'Admin 5',
            'email' => 'admin5@admin.com',
            'password' => Hash::make('123456789'),
            'estado'=> 1,
        ]);

        DB::table('users')->insert([
            'name' => 'Admin 6',
            'email' => 'admin6@admin.com',
            'password' => Hash::make('password'),
            'estado'=> 1,
        ]);
        DB::table('users')->insert([
            'name' => 'Admin 7',
            'email' => 'admin7@admin.com',
            'password' => Hash::make('123456789'),
            'estado'=> 1,
        ]);

        DB::table('users')->insert([
            'name' => 'Admin 8',
            'email' => 'admin8@admin.com',
            'password' => Hash::make('password'),
            'estado'=> 1,
        ]);
        // Puedes agregar más usuarios si lo deseas
    }
}
