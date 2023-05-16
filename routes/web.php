<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GenericsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
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

Route::get('/', function () {
    return view('generics.index');
});

Route::get('/index', [GenericsController::class, 'index'])->name("generics.index");
Route::get('/about', [GenericsController::class, 'about'])->name("generics.about");
Route::get('/services', [GenericsController::class, 'services'])->name("generics.services");


Route::get('/projets', [ProjectController::class, 'index'])->name("project.index");
Route::get('/projet-{id}', [ProjectController::class, 'show'])->name("project.show");


Route::get('/contact', [ContactController::class, 'index'])->name("contact.index");
Route::post('/contact/store', [ContactController::class, 'store'])->name("contact.store");
Route::get('/contact-admin', [ContactController::class, 'show'])->middleware(['auth', 'verified'])->name("contact.show");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
