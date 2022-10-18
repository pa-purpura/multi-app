<?php

use App\Http\Controllers\CarController;
use App\Models\Car;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    $cars = Car::all();
    dd($cars);
    return view('dashboard', compact('cars'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('car', CarController::class);

require __DIR__.'/auth.php';
