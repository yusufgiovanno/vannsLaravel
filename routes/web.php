<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\vann;
use App\Http\Controllers\vannapi;

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

Route::get('/', function () {
    return view('v_login');
});

Route::view("insertion", "v_insert");
Route::view('template', 'template');
Route::view('home', 'index');
Route::view('profile', 'v_profile');

Route::get('dataAPI', [Vannapi::class, 'fetchAPI']);
Route::get("logout", [vann::class, 'logout']);
Route::get("employees", [vann::class, 'index']);
Route::post("insert", [vann::class, 'insertion']);
Route::get('edit/{id}', [vann::class, 'edit']);
Route::post('edit', [vann::class, 'update']);
Route::get('delete/{id}', [vann::class, 'delete']);
Route::get('drop/{id}', [vann::class, 'drop']);
Route::post('log', [vann::class, 'login'])

?>

