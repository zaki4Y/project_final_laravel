<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create admin role


        DB::table('roles')->insert([
            [
                "name" => "admin",
                "guard_name" => "web"
            ],

            [
                "name" => "user",
                "guard_name" => "web"
            ],
        ]);



        // // Create the admin user
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => '123123123', 
        ]);

       

        $admin->assignRole('admin');
    }
}
