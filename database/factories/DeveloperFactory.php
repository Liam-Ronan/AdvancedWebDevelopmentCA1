<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Developer>
 */
class DeveloperFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
             /* Creating fake data for a dev */
            'name' => $this->faker->name,
            'bio' => $this->faker->realText,
            'address' => $this->faker->address,
            'email' => $this->faker->email
        ];
    }
}
