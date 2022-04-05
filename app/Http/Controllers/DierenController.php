<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use Auth;
use DB;

class DierenController extends Controller
{
    public function index(){
        return view("dieren.index",[
            "dieren" => \App\Models\Huisdieren::all()->where("oppasser", null),
        ]);
    }

    public function home(){
        return view("dieren.home",[
            "dieren" => \App\Models\Huisdieren::all()->where("oppasser", null),
        ]);
    }

    public function mijndieren(){
        return view("oppasser.mijndieren", [
            "dieren" => \App\Models\Huisdieren::all()->where("oppasser", Auth::user()->email)
        ]);
    }

    public function admin(){
        return view("admin.index",[

        ]);
    }

    public function eigenaar(){
        
        return view("eigenaar.index",[
            "dieren" => \App\Models\Huisdieren::all()->where("eigenaar", Auth::user()->email),
        ]);
    }

    public function show($id){
        return view("dieren.show",[
            "dier" => \App\Models\Huisdieren::find($id),
        ]);
    }

    public function oppassershow($id){
        return view("oppasser.show",[
            "dier" => \App\Models\Huisdieren::find($id),
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
        $dier->image = $request->input("image");


        try{
            $dier->save();
            return redirect("/eigenaar");
        }
        catch(Exception $e){
            return redirect("/dieren/create");
        }
    }

    public function checkRole(){
        if(Auth::user()->role == "admin"){
            return redirect("/admin");
        }
        else if(Auth::user()->role == "eigenaar"){
            return redirect("/eigenaar");
        }
        else if(Auth::user()->role == "oppasser"){
            if(Auth::user()->huis == null){
                return redirect("/huis/create");
            }
            else{
                return redirect("/oppasser");
            }
        }
    }

    public function delete(Request $request){
        DB::table("huisdieren")->where("name", $request->input("dier"))->delete();
        return redirect("/verzoeken");
    }
}
