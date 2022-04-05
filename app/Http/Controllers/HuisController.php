<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class HuisController extends Controller
{
    public function index(){
        return view("huis.index", ["huis" => \App\Models\Huis::all(), "role" => Auth::user()->role]);
        
    }

    public function show(Request $request){
        return view("huis.show", ["huis" => \App\Models\Huis::all()->where("oppasser", $request->input("oppasser"))->first()]);
    }

    public function create(){
        return view("huis.create");
    }

    public function store(Request $request, \App\Models\Huis $huis){
        $huis->name = $request->input("name");
        $huis->postcode = $request->input("postcode");
        $huis->huisnummer = $request->input("huisnummer");
        $huis->plaatsnaam = $request->input("plaatsnaam");
        $huis->image1 = $request->input("image1");
        $huis->image2 = $request->input("image2");
        $huis->image3 = $request->input("image3");
        $huis->image4 = $request->input("image4");
        $huis->oppasser = Auth::user()->email;

        try{
            $huis->save();
            DB::table("users")->where("email", Auth::user()->email)->update(["huis" => "true"]);
            return redirect("/home");
        }
        catch(Exception $e){
            return redirect("/home");
        }
    }
}
