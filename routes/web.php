<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\vann;
use App\Http\Controllers\vannapi;

Route::get('/', function () {
    return view('welcome');
});
Route::get('cariwilayah', function(){
    return view('v_kodepos');
});

Route::view("loginJL", "v_login");
Route::view("insertion", "v_insert");
Route::view('template', 'template');
Route::view('home', 'index');
Route::view('profile', 'v_profile');

Route::get('wilayah', [Vannapi::class, 'pos']);
Route::get('cvd', [Vannapi::class, 'cvd']);
Route::get('dataAPI', [Vannapi::class, 'fetchAPI']);
Route::get("logout", [vann::class, 'logout']);
Route::get("employees", [vann::class, 'index']);
Route::get('edit/{id}', [vann::class, 'edit']);
Route::get('delete/{id}', [vann::class, 'delete']);
Route::get('drop/{id}', [vann::class, 'drop']);

Route::post('edit', [vann::class, 'update']);
Route::post("insert", [vann::class, 'insertion']);
Route::post('log', [vann::class, 'login']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');