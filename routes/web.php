<?php

use App\Http\Controllers\userController;
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
    return view('welcome');
});

// Route pour ajouter un utilisateur
Route::post('/users', [userController::class, 'store']);

// Route pour supprimer un utilisateur
Route::delete('/users/{id}', [userController::class, 'destroy']);