<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class KonijnTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $konijn_array = ["Hangoor", "Dwergkonijn", "Witte wener", "Mini Rex", "Leeuwenkop"];

    //     DB::table("huisdieren")->insert([
    //         "name" => "Hangoor", 
    //         "kind" => "Konijn",
    //         "description" => "De Hangoor is een van de vele konijnen waar je op kunt passen.",
    //         "image" => "/img/hangoorkonijn.JPG"
    //     ]);
    //     DB::table("huisdieren")->insert([
    //         "name" => "Dwergkonijn", 
    //         "kind" => "Konijn",
    //         "description" => "De Dwergkonijn is een van de vele konijnen waar je op kunt passen.",
    //         "image" => "/img/dwergkonijn.jpg"
    //     ]);
    //     DB::table("huisdieren")->insert([
    //         "name" => "Witte wener", 
    //         "kind" => "Konijn",
    //         "description" => "De Witte wener is een van de vele konijnen waar je op kunt passen.",
    //         "image" => "/img/wittewener.jpg"
    //     ]);
    //     DB::table("huisdieren")->insert([
    //         "name" => "Mini Rex", 
    //         "kind" => "Konijn",
    //         "description" => "De Mini Rex is een van de vele konijnen waar je op kunt passen.",
    //         "image" => "/img/minirex.jpg"
    //     ]);
    //     DB::table("huisdieren")->insert([
    //         "name" => "Leeuwenkop", 
    //         "kind" => "Konijn",
    //         "description" => "De Leeuwenkop is een van de vele konijnen waar je op kunt passen.",
    //         "image" => "/img/leeuwenkop.jpg"
    //     ]);
    }
}
