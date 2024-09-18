<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GelombangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('gelombangs')->insert([
            'nama_gelombang' => 'Gelombang 1',
            'aktif' => '1'
        ]);
        DB::table('gelombangs')->insert([
            'nama_gelombang' => 'Gelombang 2',
            'aktif' => '0'
        ]);

    }
}
