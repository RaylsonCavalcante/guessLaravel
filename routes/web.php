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

use App\Http\Controllers\GuessController;

Route::get('/', [GuessController::class, 'index']);
Route::get('/events/guess/{id}', [GuessController::class, 'guess']);
Route::post('/events/{id}', [GuessController::class, 'store']);
Route::delete('/events/{id}', [GuessController::class, 'destroy']);