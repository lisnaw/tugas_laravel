<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, "index"] );


// hari ini
Route::get('/from', function () {
    return view('from');
});

Route::post("/submit",[HomeController::class, "from"]);



// tambahkan 1 okto
Route::get("/create", [HomeController::class, "store"]);

Route::get("/show", [HomeController::class, "show"]);
