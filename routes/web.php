<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
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

//home------------------------------------------------------------------------------------------------------------------------------------------
Route::get("/", [HomeController::class, "index"])->name("home");

//task---------------------------------------------------------------------------------------------------------------------------------------
Route::resource("/tasks", TaskController::class)->middleware("auth");


//auth---------------------------------------------------------------------------------------------------------------------------------------------
//register
Route::get("/profiles/create", [ProfileController::class, "create"])->name("profiles.create");
Route::post("/profiles/store", [ProfileController::class, "store"])->name("profiles.store");

//login
Route::get("/login", [ProfileController::class, "show"])->name("login.show");
Route::post("/login", [ProfileController::class, "login"])->name("login.login");
Route::get("/logout", [ProfileController::class, "logout"])->name("login.logout");