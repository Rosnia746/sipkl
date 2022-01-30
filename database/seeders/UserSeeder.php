<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'password' => Hash::make('12345678'),
            'role' => 'admin'
        ]);
        DB::table('users')->insert([
            'name' => 'Pembimbing',
            'email' => 'pembimbing@test.com',
            'password' => Hash::make('12345678'),
            'role' => 'pembimbing'
        ]);
        DB::table('users')->insert([
            'name' => 'Rosnia Yurista',
            'email' => 'rosnia@test.com',
            'password' => Hash::make('12345678'),
            'role' => 'siswa'
        ]);
    }
}
