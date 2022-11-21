<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Project;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CreatorSeeder::class);

        \App\Models\User::factory(5)->create();

        //Populating the database with 5 entries

        //Common console command used throughout the project -> php artisan migrate:refresh --seed
        //Creating the uuid
        Project::factory(12)->create();
    }
}
