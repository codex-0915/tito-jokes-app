<?php

use App\Models\Joke;
use App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JokeController;
use App\Http\Controllers\UserController;

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

// Root page that shows all the jokes
Route::get('/', [JokeController::class,'index']);

// Form page for creating a joke
Route::get('/jokes', [JokeController::class,'addJoke']);

// Process route for the submitted joke
Route::post('/submit', [JokeController::class,'submit']);

// Route for showing a single joke
Route::get('/jokes/{id}', [JokeController::class,'show']);

// Route for deleting joke
Route::delete('/jokes/{id}', [JokeController::class,'destroy']);

// Route for registration
Route::get('register', [UserController::class, 'create']);

// Route for registration
Route::post('users', [UserController::class, 'store']);

// Route for login
Route::get('login', [UserController::class, 'login']);
