<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class VerzoekenController extends Controller
{
    public function index(){
        return view("verzoeken.index",[
            "verzoek" => \App\Models\Verzoeken::where("dier", "")->first()
        ]);
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
