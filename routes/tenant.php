<?php

declare(strict_types=1);

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;



/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/

Route::middleware([
    InitializeTenancyByDomain::class,
    PreventAccessFromCentralDomains::class,
    'web',
])->group(function () {

    
    Route::get('/', function () {

        return view('welcome_tenant');
    });

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::resource('car', CarController::class);

    // GET|HEAD        car ................................. car.index › CarController@index
    // POST            car ................................. car.store › CarController@store
    // GET|HEAD        car/create .......................... car.create › CarController@create
    // GET|HEAD        car/{car} ........................... car.show › CarController@show
    // PUT|PATCH       car/{car} ........................... car.update › CarController@update
    // DELETE          car/{car} ........................... car.destroy › CarController@destroy
    // GET|HEAD        car/{car}/edit ...................... car.edit › CarController@edit

    require __DIR__.'/auth.php';
});
