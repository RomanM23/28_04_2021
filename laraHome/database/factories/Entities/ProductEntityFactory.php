<?php

namespace Database\Factories\Entities;

use App\Models\Entities\ProductEntity;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductEntityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductEntity::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => implode(' ', $this->faker->words(1)),
            'price' => $this->faker->randomDigitNotZero(),
            'description' => implode(' ', $this->faker->words(1)),
            'quantity' => $this->faker->randomNumber(2),
            'weight' => $this->faker->randomDigit(),
        ];
    }
}
