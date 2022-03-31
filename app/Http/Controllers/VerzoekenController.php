<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class VerzoekenController extends Controller
{
    public function index(){
        $huisdieren_van_user = \App\Models\Huisdieren::all()->where("eigenaar", Auth::user()->email); 

        for($i=0; $i<count($huisdieren_van_user); $i++){
            $huisdier_namen = array();
            array_push($huisdier_namen, $huisdieren_van_user[$i]->name);
        }

        // return $huisdier_namen;

        return \App\Models\Verzoeken::wherein("name", ["Dier 1", "Dier 2", "Dier2"]);

        // return \App\Models\Huisdieren::where("eigenaar", Auth::$user->email);
        // return view("verzoeken.index",[
        //     "verzoek" => \App\Models\Verzoeken::where("dier", "")->first()
        // ]);
    }

    


    public function store(Request $request, \App\Models\Verzoeken $verzoek){
        $verzoek->dier = $request->input("dier");
        $verzoek->oppasser = Auth::user()->email;

        try{
            $verzoek->save();
            return redirect("/dieren");
        }
        catch(Exception $e){
            return "helaas niet gelukt";
        }
    }
}
