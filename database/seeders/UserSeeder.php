<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Get the admin role from the role table. Later(line 31) attach this role to a user */
        $role_admin = Role::where('name', 'admin')->first();

        /* Get the user role from the role table. Later(line 42) attach this role to users */
        $role_user = Role::where('name', 'admin')->first();

        $admin = new User();
        $admin->name = 'Liam Ronan';
        $admin->email = 'liamronan16@gmail.com';
        $admin->password = Hash::make('password');
        $admin->save();

        /* Attaching Admin role to User that was created above*/
        $admin->roles()->attach($role_admin);

        $user = new User();
        $user->name = 'Jane Doe'; 
        $user->email = 'janedoe@gmail.com';
        $user->password = Hash::make('password'); 
        $user->save();
        
        /* Attaching User role to this user */
        $user->roles()->attach($role_user);
    }
}
