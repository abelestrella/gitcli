<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Computer>
 */
class ComputerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'model' => fake()->name(),
            'mark' => fake()->name(),
            'size' => fake()->numberBetween(11,17), //usando un numero dentro del rango
            //'size' => fake()->randomElements([11, 14, 15, 17]), //usando un numero dentro del array
            'published_at' => fake()->datetime(),
            'is_active' => fake()->boolean(),
        ];
    }
}
