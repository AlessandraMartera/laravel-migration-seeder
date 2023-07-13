<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Train>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'agency' => fake() -> company(),
            'departure_station' => fake() -> city(),
            'arrival_station' => fake() -> city(),
            'departure_time' => fake() -> time(),
            'arrival_time' => fake() -> time(),
            'code' => fake() -> randomNumber(8, true),
            'n_carriage' => fake() -> numberBetween(1, 12),
            'in_time' => fake() -> boolean(),
            'delated' => fake() -> boolean(),
        ];
    }
}
