<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DierenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dieren_array = ["Hond", "Kat", "Geit", "Konijn", "Schildpad"];

        foreach($dieren_array as $dier){
            DB::table("dieren")->insert([
                "kind" => $dier
            ]);
        }
    }
}
