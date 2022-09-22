<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->words(2, true),
            'price' => $this->faker->randomNumber(9, true),
            'status' => $this->faker->numberBetween(0, 1),
        ];
    }
}
