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
            // "category" => "admin",
            "role" => "admin"

        ]);
    }
}
