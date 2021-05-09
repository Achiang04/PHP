<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class About extends Controller
{
    //
    function loadView($versi) {

        return view("about", ["version" => "1.0.0", "versi" => $versi]);
    }
}
