<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'detail' => $this->faker->paragraph,
            'price' => $this->faker->numberBetween(100, 1000),
            'stock' => $this->faker->randomDigit,
            'discount' => $this->faker->numberBetween(10, 30),
        ];
    }
}
