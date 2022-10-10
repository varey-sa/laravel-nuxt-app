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
            'name' => $this->faker->company(),
            'image' => $this->faker->imageUrl(640, 480, 'animals', true),
            'description' => $this->faker->paragraph(),
        ];
    }
}
