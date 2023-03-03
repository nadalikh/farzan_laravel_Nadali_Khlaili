<?php

namespace Database\Factories;

use App\Models\MotorBike;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MotorBike>
 */
class MotorBikeFactory extends Factory
{
    protected $model = MotorBike::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "color" => $this->faker->colorName(),
            "weight" => $this->faker->numberBetween(90, 300),
            "price" => $this->faker->numberBetween(1000000000, 900000000),
            "image" => $this->faker->imageUrl()
        ];
    }
}
