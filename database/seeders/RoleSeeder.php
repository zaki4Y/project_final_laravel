<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create admin role
        DB::table('roles')->create([
            [

                "name" => "admin",
                "guard_name" => "web"
            ],

            [
                "name" => "user",
                "guard_name" => "web"
            ]
        ]);

    }
}
