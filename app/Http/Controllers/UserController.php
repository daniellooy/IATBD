<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    public function index(){
        return view("admin.users", [
            "users" => \App\Models\User::all()
        ]);
    }

    public function delete(Request $request){
        DB::table("users")->where("email", $request->input("user"))->delete();
        return redirect("/admin/users");
    }
}
