<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Porfolio>
 */
class PorfolioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'img' => fake()->img(),
            'comentarios' => fake()->comentarios(),
            'info' => fake()->info(),
        ];
    }

    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'comentarios_verified_at' => null,
        ]);
    }
}
