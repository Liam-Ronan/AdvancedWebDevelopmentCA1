<?php

namespace Database\Seeders;

use App\Models\Developer;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Developer::factory()
        ->times(3)
        ->create();

        foreach(Project::all() as $project) {
            $developers = Developer::inRandomOrder()->take(rand(1,3))->pluck('id');
            $project->developers()->attach($developers);
        }
    }
}
