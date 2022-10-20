<?php

namespace Database\Factories;

use App\Models\Category;
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
            'description' => $this->faker->sentence(5),
            'content' => $this->faker->sentence(10),
            // 'category_id' => $this->faker->numberBetween(1, 14),
            // 'category_id' => Category::factory(),
            'category_id' => Category::inRandomOrder()->first()->id,
            'is_top_collection' => $this->faker->numberBetween(0, 1),
            'is_trending' => $this->faker->numberBetween(0, 1),
            'is_feature' => $this->faker->numberBetween(0, 1),
            'is_best_seller' => $this->faker->numberBetween(0, 1),
            'is_on_sale' => $this->faker->numberBetween(0, 1),
            'sale' => $this->faker->numberBetween(0, 100),
        ];
    }
}
