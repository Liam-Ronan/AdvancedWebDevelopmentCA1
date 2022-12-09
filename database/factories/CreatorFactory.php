<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Creator>
 */
class CreatorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            /* Creating fake data for a creator */
            'name' => $this->faker->name,
            'address' => $this->faker->address,
            'bio' => $this->faker->paragraph(5),
            'portfolio' => $this->faker->url(),
            'email' => $this->faker->email(),
        ];
    }
}
