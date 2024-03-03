<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('kategoris')->insert([
            'tag' => 'hewanpeliharaan',
            'judul_kategori' => 'Hewan Peliharaan',
            'foto_kategori' => 'hewanpeliharaan.jfif'
        ]);
    }
}
