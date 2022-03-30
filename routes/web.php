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


    
Route::get("/", [\App\Http\Controllers\DierenController::class, "index"]);
    


Route::middleware(["auth", "admin"])->group(function(){
    
});

Route::middleware(["auth", "eigenaar"])->group(function(){
    Route::get("/huizen", [\App\Http\Controllers\HuisController::class, "index"]);
    Route::get("/dieren/create", [\App\Http\Controllers\DierenController::class, "create"]);
    Route::post("/dieren", [\App\Http\Controllers\DierenController::class, "store"]);


});

Route::middleware(["auth", "oppasser"])->group(function(){
    Route::get("/dieren", [\App\Http\Controllers\DierenController::class, "index"]);
    Route::get("/dieren/{id}", [\App\Http\Controllers\DierenController::class, "show"]);
    Route::get("/verzoek/{id}", [\App\Http\Controllers\VerzoekenController::class, "store"]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';
