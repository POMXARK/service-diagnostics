<?php

namespace Database\Factories;

use App\Models\Obj1Ai;
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
            'id'        => Obj1Ai::max('id') + 1 ?? 0,
            'idobj'     => fake()->numberBetween(1,10),
            'idai'      => fake()->numberBetween(0,9),
            'datein'    => fake()->dateTimeThisMonth(),
            'mode'      => fake()->numberBetween(1,10),
            'aimax'     => fake()->numberBetween(1,100),
            'aimean'    => fake()->numberBetween(1,100),
            'aimin'     => fake()->numberBetween(1,100),
            'statmin'   => fake()->numberBetween(1,100),
            'statmax'   => fake()->numberBetween(1,100),
            'mlmin'     => fake()->numberBetween(1,100),
            'mlmax'     => fake()->numberBetween(1,100),
            'err'       => fake()->numberBetween(1,100),
            'sts'       => fake()->randomElement([1,2]),
            'dateout'   => fake()->dateTimeThisMonth(),
            'datecheck' => fake()->dateTimeThisMonth(),
            'cmnt'      => fake()->numberBetween(1,10),
        ];
    }
}
