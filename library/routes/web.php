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

Route::get('/livres', [NavController::class, 'list']);

Route::get('/detail/{id}', [NavController::class, 'detail']);

Route::get('/ajouter', [NavController::class, 'ajout']);

Route::post('/ajouter', [ActionController::class, 'ajout']);

Route::post('/delete', [ActionController::class, 'deletebook']);

Route::get('/update/{id}', [NavController::class, 'updateBook']);

Route::post('/update/{id}', [ActionController::class, 'updateBook']);





