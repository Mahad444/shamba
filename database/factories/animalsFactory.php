<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\animals>
 */
class animalsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name'=>fake()->name(),
            'user_id'=>User::pluck('id')->random(),
            'quantity'=>fake()->numberBetween(2,10),
            'farmers_note'=>fake()->text(100),
        ];
    }
}

