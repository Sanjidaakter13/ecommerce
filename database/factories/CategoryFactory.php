<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'status'=>'active',
            'image'=>fake()->imageUrl($width = 640, $height = 480 , 'dresses'),
            'description'=>fake()->realText($maxNbChars = 200, $indexSize = 2),
        ];
    }
}
