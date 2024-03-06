<?php

use App\Http\Controllers\crudController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/",function(){
    return redirect("/main");
});

Route::resource("/main",crudController::class);

Route::get("/register",[userController::class,"register_view"]);
Route::post("/register",[userController::class,"register_store"]);
Route::get("/login",[userController::class,"login_view"]) -> name("login");
Route::post("/login",[userController::class,"login_auth"]);
Route::get("/logout",[userController::class,"logout"]);