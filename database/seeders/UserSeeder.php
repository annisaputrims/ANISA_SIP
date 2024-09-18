<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'id_level' => '1',
            'nama_lengkap' => 'admin  1',
            'email' => 'admin1@gmail.com',
            'password' => Hash::make('12345678'), // password('password') for testing
        ]);
    }
}
