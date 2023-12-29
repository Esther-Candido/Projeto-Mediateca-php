<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Obra>
 */
class ObraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => fake()->sentence,
            'tipo_id' => fake()->numberBetween(1, 2),
            'exemplares' => fake()->numberBetween(0, 20),
            'preco' => fake()->randomFloat(2, 1, 100),
            'disponivel' => fake()->boolean(75),
            'isbn' => fake()->isbn13(),
            'descr' => fake()->text(250),
            'duracao' => fake()->numberBetween(60, 180)
        ];
    }

    public function livros(): static
    {
        return $this->state(fn(array $attributes) => [
            'duracao' => null,
            'tipo_id' => 1
        ]);
    }

    public function dvds(): static
    {
        return $this->state(fn(array $attributes) => [
            'tipo_id' => 2,
            'isbn' => null,
            'descr' => null
        ]);
    }
}
