<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use Auth;

class DierenController extends Controller
{
    public function index(){
        return view("dieren.index",[
            "dieren" => \App\Models\Huisdieren::all()
        ]);
    }

    public function show($id){
        return view("dieren.show",[
            "dier" => \App\Models\Huisdieren::find($id)
        ]);
    }

    public function create(){
        return view("dieren.create", ["animal" => \App\Models\Dieren::all()]);
    }

    public function store(Request $request, \App\Models\Huisdieren $dier){
        $dier->name = $request->input("name");
        $dier->kind = $request->input("kind");
        $dier->description = $request->input("description"); 
        $dier->eigenaar = Auth::user()->email;


        try{
            $dier->save();
            return redirect("/");
        }
        catch(Exception $e){
            return redirect("/dieren/create");
        }
    }
}
