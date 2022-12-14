<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Primavera;

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
    return view('index');
});

Route::get('/index', [Primavera::class, 'index'])->name("index");
Route::get('/about', [Primavera::class, 'about'])->name("about");
Route::get('/contact', [Primavera::class, 'contact'])->name("contact");
Route::get('/services', [Primavera::class, 'services'])->name("services");
Route::get('/work', [Primavera::class, 'work'])->name("work");