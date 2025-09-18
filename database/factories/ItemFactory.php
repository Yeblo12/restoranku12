<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'price' => $this->faker->randomfloat(2, 1000, 100000),
            'category_id' => $this->faker->numberBetween(1,2),
            'img' => $this->faker->imageUrl(),
            'is_available' => $this->faker->boolean(),
        ];
    }
}
