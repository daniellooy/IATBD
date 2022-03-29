<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            "name" => "admin", 
            "email" => "admin@test.nl",
            "password" => bcrypt("Fietsbel99"),
            "category" => "admin",
            "role" => "admin"

        ]);

        DB::table("users")->insert([
            "name" => "eigenaar", 
            "email" => "eigenaar@test.nl",
            "password" => bcrypt("Fietsbel99"),
            "category" => "eigenaar",
            "role" => "eigenaar"
        ]);

        DB::table("users")->insert([
            "name" => "oppasser", 
            "email" => "oppasser@test.nl",
            "password" => bcrypt("Fietsbel99"),
            "category" => "oppasser",
            "role" => "oppasser"

        ]);
    }
}
