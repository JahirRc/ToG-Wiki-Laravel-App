<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Characters;

use App\Http\Controllers\AnotherController;


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
    return view('welcome');
});

Route::get("data", [Characters::class, "index"]);

Route::get('/another-view', [AnotherController::class, 'show']);

Route::get('/', [Characters::class, 'chargeCharacters']);

Route::get('/', [Characters::class, 'chargeCharacters'])->name('welcome');
