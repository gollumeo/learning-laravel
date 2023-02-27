<?php

use App\Http\Controllers\CreateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;

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

// Display all our restaurants
Route::get('/restaurants', [RestaurantController::class, 'index']);

// Display the form to create a new restaurant
Route::get('/restaurants/create', [CreateController::class, 'create']);

// Display a called restaurant
Route::get('/restaurants/{restaurant}', [RestaurantController::class, 'show']);

// Create a new restaurant
Route::post('/restaurants/create', [RestaurantController::class, 'store']);

// Display the form to edit a called restaurant
Route::get('/restaurants/edit/{restaurant}', [RestaurantController::class, 'edit']);

// Update a called restaurant
Route::patch('/restaurants/edit/{restaurant}', [RestaurantController::class, 'update']);

// Delete a called restaurant
Route::delete('/restaurants/{id}', [RestaurantController::class, 'destroy']);

