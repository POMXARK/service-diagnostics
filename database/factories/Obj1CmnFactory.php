<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
            'id' => fake()->unique()->randomNumber(),
            'idobj'  => fake()->randomNumber(),
            'amount' => fake()->randomNumber(),
            'date'   => fake()->dateTimeThisMonth(),
            'mode'   => fake()->randomNumber(),
            'ai1'    => fake()->randomNumber(),
            'ai2'    => fake()->randomNumber(),
            'ai3'    => fake()->randomNumber(),
            'ai4'    => fake()->randomNumber(),
            'ai5'    => fake()->randomNumber(),
            'ai6'    => fake()->randomNumber(),
            'ai7'    => fake()->randomNumber(),
            'ai8'    => fake()->randomNumber(),
            'ai9'    => fake()->randomNumber(),
            'ai10'   => fake()->randomNumber(),
        ];
    }
}
