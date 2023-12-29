<?php

namespace Database\Seeders;

use App\Models\Requisicao;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RequisicaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Requisicao::factory(10)->create();
        Requisicao::factory(20)->abertas()->create();
        Requisicao::factory(30)->fechadas()->create();
    }
}
