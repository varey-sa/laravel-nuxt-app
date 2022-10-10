<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Product::class;

    public function definition()
    {
        return [
            'brand' => $this->faker->company(),
            'description' => $this->faker->paragraph(),
            'discountPercentage' => $this->faker->randomNumber(2),
            'image' => $this->faker->imageUrl(640, 480, 'animals', true),
            'price' => $this->faker->numberBetween(0,100),
            'rating' => $this->faker->numberBetween(0,5),
            'category_id' => $this->faker->numberBetween(1,10),
            'stock' => $this->faker->randomNumber(2),
            'thumbnail' => $this->faker->imageUrl(640, 480, 'animals', true),
            'title' => $this->faker->name(),
            //
        ];
    }
}
