<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\ActionController;

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

Route::get('/', [NavController::class, 'welcome']);
Route::get('/list', [NavController::class, 'list']);
Route::get('/personnage/{id}', [NavController::class, 'personnage']);
Route::get('/ajoutPersonnage', [NavController::class, 'ajoutPersonnage']);
Route::post('/ajoutPersonnage', [ActionController::class, 'ajoutPersonnage']);
Route::post('/supprPersonnage', [ActionController::class, 'supprPersonnage']);
Route::get('/majPersonnage/{id}', [NavController::class, 'majPersonnage']);
Route::post('/majPersonnage', [ActionController::class, 'majPersonnage']);