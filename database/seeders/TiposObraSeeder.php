<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TiposObraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipos_obra')->insert([
            'tipo'=>'Livro',
            'created_at'=>now(),
            'updated_at'=>now()
        ]);

        DB::table('tipos_obra')->insert([
            'tipo'=>'DVD',
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
    }
}
