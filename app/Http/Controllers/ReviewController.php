<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function create(Request $request){
        return view("review.create",[
            "dier" => \App\Models\Huisdieren::all()->where("name", $request->input("dier"))->first()
        ]);
    }

    public function store(Request $request, \App\Models\Review $review){
        $review->content = $request->input("review");
        $review->oppasser = \App\Models\Huisdieren::all()->where("name", $request->input("dier"))->first()->oppasser;
        $review->eigenaar = \App\Models\Huisdieren::all()->where("name", $request->input("dier"))->first()->eigenaar;

        try{
            $review->save(); 
            DB::table("huisdieren")->where("name", $request->input("dier"))->delete();
            return redirect("/verzoeken");
        }
        catch(Exception $e){
            return redirect("/review/create");
        }
    }
}
