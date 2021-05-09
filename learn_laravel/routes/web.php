<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{Users, About};


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// path, page
// path = / (root)
// page = user, welcome, hello 

// ada cara yang lebih cepat
// Route::view("about", "about");

Route::get('/', function () {
    return view('welcome');
});

Route::get('user/{name}', function ($name) {
    echo $name;
    return view('user', ["name" => $name]);
});

Route::get('about/{versi}', [About::class, "loadView"]);

Route::get('contact', function () {
    return redirect("about");
});

// connect route with controller
// Route::get("path", "controller file");
Route::get("users/{user}", [users::class, 'hello']);

// blade template
Route::get("user1", [users::class, 'viewLoad1']);
Route::get("user2", [users::class, 'viewLoad2']);

// post
Route::post("user3", [users::class, "getData"]);
route::view("login", "user3");

// middleware
route::view("noAccess", "noAccess");
Route::group(["middleware" => ['protectedPaage']], function() {
    route::view("user4", "user4");
    route::view("home", "home");
});

route::view("user5", "user5")->middleware("protectedPage");