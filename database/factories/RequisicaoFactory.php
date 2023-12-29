<?php

namespace Database\Factories;

use App\Models\Obra;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Requisicao>
 */
class RequisicaoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'=>User::inRandomOrder()->first()->id,
            'obra_id'=>Obra::inRandomOrder()->first()->id,
            'aberta'=>fake()->boolean(45),
        ];
    }

    public function abertas(): static
    {
        $data=now()
            ->subHours(fake()->numberBetween(50,500))
            ->subMinutes(fake()->numberBetween(50,500))
            ->subSeconds(fake()->numberBetween(50,500));
        return $this->state(fn(array $arguments) => [
            'aberta'=>true,
            'updated_at'=>$data,
            'created_at'=>$data
        ]);
    }

    public function fechadas(): static
    {
        return $this->state(fn(array $arguments) => [
            'aberta'=>false,
            'created_at'=>now()
                ->subHours(fake()->numberBetween(50,500))
                ->subMinutes(fake()->numberBetween(50,500))
        ]);
    }
}
