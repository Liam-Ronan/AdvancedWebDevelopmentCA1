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
        /* Creating 3 devs */
        Developer::factory()
        ->times(3)
        ->create();

        /* getting all projects and looping through */
        foreach(Project::all() as $project) 
        {
            /* getting 1-3 devs randomly and getting the id for each */
            $developers = Developer::inRandomOrder()->take(rand(1,3))->pluck('id');
            /* Attaching the devs to the projects  */
            $project->developers()->attach($developers);
        }
    }
}
