<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'currentInventory' => fake()->numberBetween(1, 100),
            'avgSalesPerWeek' => fake()->numberBetween(1, 100),
            'leadTimeDays' => fake()->numberBetween(1, 100)
        ];
    }
}
