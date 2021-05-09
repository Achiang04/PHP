<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //
    public function hello($user) {
        echo $user;
        echo " hello from user controller ";
        return ['name'=>"asep", "age"=>"19"];
    }

    public function viewLoad1() {
        return view("user1", ["users" => ["asep", "bambang", "ucup"], "user" => "otong"]);
    } 
    public function viewLoad2() {
        return view("user2", ["users" => ["asep", "bambang", "ucup"]]);
    }

    public function getData(Request $request) {
        $request->validate([
            "username"=> "required | max: 10",
            "password"=> "required | min : 6"
        ]);
        return $request->input();
    }
}
