<?php

use App\Http\Controllers\DaftarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RelasiController;
use App\Http\Controllers\SchoolController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, "index"] );


Route::get('/from', function () {
    return view('from');
});
Route::post("/submit",[HomeController::class, "from"]);


Route::post("/create", [HomeController::class, "store"]);
Route::get("/create2", [HomeController::class, "store2"]);
Route::get("/create3", [HomeController::class, "store3"]);
Route::get("/create4", [HomeController::class, "store4"]);

Route::get("/show", [HomeController::class, "show"]);

Route::get('/product/{id}/edit', [HomeController::class,"edit"]);
Route::put('/product/{id}', [HomeController::class, 'update']);
Route::delete('/product/{id}', [HomeController::class, 'destroy']);
Route::get('/input', [HomeController::class, 'input']);



Route::get('/ktp', [DaftarController::class, 'index']);
Route::get('pengguna/create', [DaftarController::class, 'create']);
Route::post('pengguna/store', [DaftarController::class, 'store']);
Route::get('/school', [SchoolController::class, 'index']);
