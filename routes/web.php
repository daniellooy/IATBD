<?php

use Illuminate\Support\Facades\Route;
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
Route::get("/", [\App\Http\Controllers\DierenController::class, "home"]);
Route::get("/home", [\App\Http\Controllers\DierenController::class, "checkRole"]);

Route::middleware(["auth", "admin"])->group(function(){
    Route::get("/admin", [\App\Http\Controllers\DierenController::class, "admin"]);
    Route::get("/admin/users", [\App\Http\Controllers\UserController::class, "index"]);
    Route::get("/admin/verzoeken", [\App\Http\Controllers\VerzoekenController::class, "show"]);
    Route::post("/verzoeken/delete", [\App\Http\Controllers\VerzoekenController::class, "delete"]);
    Route::post("/user/delete", [\App\Http\Controllers\UserController::class, "delete"]);
});

Route::middleware(["auth", "eigenaar"])->group(function(){
    // Route::get("/", [\App\Http\Controllers\DierenController::class, "checkRole"]);
    Route::get("/eigenaar", [\App\Http\Controllers\DierenController::class, "eigenaar"]);
    Route::get("/dieren/create", [\App\Http\Controllers\DierenController::class, "create"]);
    Route::post("/dieren", [\App\Http\Controllers\DierenController::class, "store"]);
    Route::get("/verzoeken", [\App\Http\Controllers\VerzoekenController::class, "index"]);
    Route::post("/accepteren", [\App\Http\Controllers\VerzoekenController::class, "accept"]);
    Route::post("/afwijzen", [\App\Http\Controllers\VerzoekenController::class, "afwijzen"]);
    Route::post("/dieren/delete", [\App\Http\Controllers\DierenController::class, "delete"]);
    Route::post("/huis", [\App\Http\Controllers\HuisController::class, "show"]);
    Route::post("/review/create", [\App\Http\Controllers\ReviewController::class, "create"]);
    Route::post("/review/store", [\App\Http\Controllers\ReviewController::class, "store"]);

});

Route::middleware(["auth", "oppasser"])->group(function(){
    Route::get("/oppasser", [\App\Http\Controllers\DierenController::class, "index"]);
    Route::get("/dieren/{id}", [\App\Http\Controllers\DierenController::class, "show"]);
    Route::post("/verzoek", [\App\Http\Controllers\VerzoekenController::class, "store"]);
    Route::get("/mijndieren", [\App\Http\Controllers\DierenController::class, "mijndieren"]);
    Route::get("/mijndieren/{id}", [\App\Http\Controllers\DierenController::class, "oppassershow"]);
    Route::get("huis/create", [\App\Http\Controllers\HuisController::class, "create"]);
    Route::post("/huizen", [\App\Http\Controllers\HuisController::class, "store"]);
    Route::get("/reviews", [\App\Http\Controllers\ReviewController::class, "index"]);
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';
