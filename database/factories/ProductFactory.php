<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'price' => $this->faker->randomFloat(2, rand(1,99), 1),
            'size' => 'medium', 
            'color' => $this->faker->hexcolor(), 
            'linkWeb' => $this->faker->url(), 
            'wishlist' => $this->faker->sentence($nbWords = 6, $variableNbWords = true)
        ];
    }
}
