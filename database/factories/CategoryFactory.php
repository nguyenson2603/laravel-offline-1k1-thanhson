<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
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
            'status' => $this->faker->numberBetween(0, 1),
        ];
        //is_top_collection, is_trending, is_feature, is_best_seller, is_on_sale, sale
    }
}
