<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {

        /* Using Faker to create fake data for each column */
        return [
            'title' => $this->faker->sentence(),
            'tags' => 'JavaScript, api, CSS',
            'date_created' => $this->faker->date(),
            'website' => $this->faker->url(),
            'description' => $this->faker->paragraph(10),
            'email' => $this->faker->email(),
        ];
    }
}
