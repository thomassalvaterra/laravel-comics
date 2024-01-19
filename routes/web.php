<?php

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

Route::get('/', function () {
    $dati = config("data");
    return view('home', ['fumetti' => $dati]);
})->name("fumetti");

// Route::get('/', function () {
//     $menu = config("data.menu");
//     return view('home', compact('menu'));
// })->name("home");
