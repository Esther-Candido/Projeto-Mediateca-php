<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Autor;
use App\Models\Obra;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            TiposObraSeeder::class,
            ObraSeeder::class,
            AutorSeeder::class,
            UserSeeder::class,
            RolesSeeder::class,
            RequisicaoSeeder::class
        ]);

        foreach (Obra::all() as $obra){
            $autores=Autor::all()->random(rand(1,3))->pluck('id');
            $obra->criada_por()->attach($autores);
        }

    }
}
