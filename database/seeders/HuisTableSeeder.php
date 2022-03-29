<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class HuisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("huis")->insert([
            "name"=>"flat"
        ]);
        DB::table("huis")->insert([
            "name"=>"woning"
        ]);
    }
}
