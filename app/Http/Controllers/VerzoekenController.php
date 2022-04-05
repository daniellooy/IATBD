<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class VerzoekenController extends Controller
{
    public function index(){
        return view("verzoeken.index", [
            "aanvragen" => \App\Models\Huisdieren::all()->where("verzoek", 1)->where("eigenaar", Auth::user()->email),
            "geaccepteerd" => \App\Models\Huisdieren::all()->where("verzoek", 2)->where("eigenaar", Auth::user()->email)
        ]);
    }

    public function show(){
        return view("admin.verzoeken", [
            "verzoeken" => \App\Models\Huisdieren::all()->whereNotNull("oppasser")
        ]);
    }

    public function store(Request $request){
        DB::table("huisdieren")->where("name", $request->input("dier"))->update(["verzoek"=>1, "oppasser" => Auth::user()->email]);
        return redirect("/oppasser");
    }

    public function delete(Request $request){
        DB::table("huisdieren")->where("name", $request->input("dier"))->update(["verzoek"=>0, "oppasser" => null]);
        return redirect("/admin/verzoeken");
    }

    public function accept(Request $request){
        DB::table("huisdieren")->where("name", $request->input("dier"))->update(["verzoek"=>2]);
        return redirect("/verzoeken");
    }

    public function afwijzen(Request $request){
        DB::table("huisdieren")->where("name", $request->input("dier"))->update(["verzoek"=>0, "oppasser" => null]);
        return redirect("/verzoeken");
    }
}
