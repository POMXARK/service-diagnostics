<?php

namespace Database\Factories;

use App\Models\Obj1Cmn;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Obj1Cmn>
 */
class Obj1CmnFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id'     => Obj1Cmn::max('id') + 1 ?? 0,
            'idobj'  => fake()->numberBetween(1,10),
            'amount' => fake()->numberBetween(1,100),
            'date'   => fake()->dateTimeThisMonth(),
            'mode'   => fake()->numberBetween(1,10),
            'ai1'    => fake()->numberBetween(1,100),
            'ai2'    => fake()->numberBetween(1,100),
            'ai3'    => fake()->numberBetween(1,100),
            'ai4'    => fake()->numberBetween(1,100),
            'ai5'    => fake()->numberBetween(1,100),
            'ai6'    => fake()->numberBetween(1,100),
            'ai7'    => fake()->numberBetween(1,100),
            'ai8'    => fake()->numberBetween(1,100),
            'ai9'    => fake()->numberBetween(1,100),
            'ai10'   => fake()->numberBetween(1,100),
        ];
    }
}
