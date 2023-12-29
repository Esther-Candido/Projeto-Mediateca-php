<?php

namespace Database\Seeders;

use App\Models\Autor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Vitor Custódio',
            'email' => 'vitor@teste.pt',
            'email_verified_at' => now(),
            'password'=>Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);

        DB::table('users')->insert([
            'name' => 'Anibal Pinto',
            'email' => 'anibal@teste.pt',
            'email_verified_at' => now()->subDays(3),
            'password'=>Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);

        DB::table('users')->insert([
            'name' => 'Filipe Candeias',
            'email' => 'filipe@teste.pt',
            'email_verified_at' => now()->subMinutes(5),
            'password'=>Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);

        Autor::factory(10)->create();
    }
}
