<?php

namespace Database\Seeders;

use App\Models\Autor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('autores')->insert([
            ['nome'=>'Vitor Custódio da Silva', 'bio'=>'Uma biografia','created_at'=>now(), 'updated_at'=>now()],
            ['nome'=>'Anibal Madalena', 'bio'=>'Uma biografia','created_at'=>now(), 'updated_at'=>now()],
            ['nome'=>'José Luís', 'bio'=>'Uma biografia','created_at'=>now(), 'updated_at'=>now()],
            ['nome'=>'Deolinda Maria', 'bio'=>'Uma biografia','created_at'=>now(), 'updated_at'=>now()],
            ['nome'=>'Fernanda da Silva', 'bio'=>'Uma biografia','created_at'=>now(), 'updated_at'=>now()],
            ['nome'=>'Paulo Inácio', 'bio'=>'Uma biografia','created_at'=>now(), 'updated_at'=>now()],
            ['nome'=>'Tatiana Costa', 'bio'=>'Uma biografia','created_at'=>now(), 'updated_at'=>now()],
        ]);

        Autor::factory(30)->create();
    }
}
