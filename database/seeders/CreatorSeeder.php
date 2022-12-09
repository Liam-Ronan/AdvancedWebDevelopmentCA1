<?php

namespace Database\Seeders;

use App\Models\Creator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Creating 6 creators that have projects */
        Creator::factory()
            ->times(6)
            ->hasProjects(5)
            ->create();
    }
}
