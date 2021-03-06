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

// Route::get('/', function () {
//     return view('layouts.main');
// })->name("main");

Route::get('/', function () {
    $comics = config('comics');
    return view('guests.products', ["comics" => $comics]);
})->name('products');

Route::get('/singleProduct{index}', function ($index) {
    $comics = config('comics');
    if(is_numeric($index) && $index >= 0 && $index < count($comics)){
        return view('guests.singleProduct', ["comic" => $comics[$index]]);
    } else {
        abort(404);
    }
})->name('single-product');
