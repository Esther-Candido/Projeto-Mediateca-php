<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Autor>
 */
class AutorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome'=>fake()->name,
            'bio'=>fake()->text(1000),
            'created_at'=>now()->subDays(rand(1,10))->subWeeks(rand(3,30))
        ];
    }
}
