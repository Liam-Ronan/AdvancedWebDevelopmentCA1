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
        /* Calling all other seeders here */
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CreatorSeeder::class);
        $this->call(DeveloperSeeder::class);

        \App\Models\User::factory(5)->create();

    }
}
