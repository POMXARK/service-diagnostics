<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Obj1Ai>
 */
class Obj1AiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id'        => fake()->unique()->randomNumber(),
            'idobj'     => fake()->randomNumber(),
            'idai'      => fake()->randomNumber(),
            'datein'    => fake()->dateTimeThisMonth(),
            'mode'      => fake()->randomNumber(),
            'aimax'     => fake()->randomNumber(),
            'aimean'    => fake()->randomNumber(),
            'aimin'     => fake()->randomNumber(),
            'statmin'   => fake()->randomNumber(),
            'statmax'   => fake()->randomNumber(),
            'mlmin'     => fake()->randomNumber(),
            'mlmax'     => fake()->randomNumber(),
            'err'       => fake()->randomNumber(),
            'sts'       => fake()->randomNumber(),
            'dateout'   => fake()->dateTimeThisMonth(),
            'datecheck' => fake()->dateTimeThisMonth(),
            'cmnt'      => fake()->randomNumber(),
        ];
    }
}
