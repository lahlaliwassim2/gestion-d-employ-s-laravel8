<?php

namespace Database\Factories;

use Doctrine\Inflector\Rules\Word;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employe>
 */
class EmployeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'registration_number' => fake()->numberBetween(),
            'fullname' => fake()->name(),
            'depart' => fake()->Word(),
            'hire_date' => fake()->date(), // password
            'phone' => fake()->numberBetween(),
            'address' => fake()->address(),
            'city' => fake()->city(),

        ];
    }
}
