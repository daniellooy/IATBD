<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("roles")->insert([
            "role" => "admin", 
        ]);
        DB::table("roles")->insert([
            "role" => "eigenaar", 
        ]);
        DB::table("roles")->insert([
            "role" => "oppasser", 
        ]);
    }
}
