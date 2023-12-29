<?php

namespace Database\Seeders;

use App\Models\Obra;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Livro
        DB::table('obras')->insert([
            'tipo_id' => 1,
            'nome' => 'O Senhor dos aneis',
            'exemplares' => 6,
            'preco' => 12.45,
            'disponivel' => true,
            'isbn' => '1137456983456',
            'descr' => 'Uma descrição sobre o livro',
            'created_at'=>now()->subDays(1),
            'updated_at'=>now()
        ]);
        //Livro
        DB::table('obras')->insert([
            'tipo_id' => 1,
            'nome' => 'Popey o marinheiro - edição dourada',
            'exemplares' => 2,
            'preco' => 9.85,
            'disponivel' => true,
            'isbn' => '0933456983456',
            'created_at'=>now()->subDays(1),
            'updated_at'=>now()
        ]);

        //Inserções multiplas
        DB::table('obras')->insert([
            //Livro
            [
                'tipo_id' => 1,
                'nome' => 'A carcaça do animal',
                'exemplares' => 2,
                'preco' => 45.01,
                'disponivel' => false,
                'isbn' => '5937450083456',
                'descr' => 'Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores. At solmen va esser necessi far uniform grammatica, pronunciation e plu sommun paroles. Ma quande lingues coalesce, li grammatica del resultant lingue es plu simplic e regulari quam ti del coalescent lingues. Li nov lingua franca va esser plu simplic e regulari quam li existent Europan',
                'duracao' => null,
                'created_at'=>now()->subDays(1),
                'updated_at'=>now()

            ],
            //DVD
            [
                'tipo_id' => 2,
                'nome' => 'Avatar - Água',
                'exemplares' => 4,
                'preco' => 12.45,
                'disponivel' => true,
                'isbn' => null,
                'descr' => null,
                'duracao' => 125,
                'created_at'=>now()->subDays(1),
                'updated_at'=>now()

            ],
            //Livro
            [
                'tipo_id' => 1,
                'nome' => 'Cozinha alentejana',
                'exemplares' => 9,
                'preco' => 11.45,
                'disponivel' => true,
                'isbn' => '5937116983456',
                'descr' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante.',
                'duracao' => null,
                'created_at'=>now()->subDays(1),
                'updated_at'=>now()
            ],
            //DVD
            [
                'tipo_id' => 2,
                'nome' => 'O Senhor dos Aneis - Regresso do Rei',
                'exemplares' => 65,
                'preco' => 22.45,
                'disponivel' => true,
                'isbn' => null,
                'descr' => null,
                'duracao' => 135,
                'created_at'=>now()->subDays(1),
                'updated_at'=>now()
            ]
        ]);

        //Automáticos com a factory
        Obra::factory(5)->livros()->create();
        Obra::factory(5)->dvds()->create();
        Obra::factory(5)->livros()->create();
        Obra::factory(5)->dvds()->create();
        Obra::factory(5)->livros()->create();
        Obra::factory(5)->dvds()->create();
        Obra::factory(5)->livros()->create();
        Obra::factory(5)->dvds()->create();
    }
}
