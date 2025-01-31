<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CastController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::get('/', [AuthController::class, 'regis']);
Route::get('/regis', [DashboardController::class, 'daftar']);
Route::post('/home', [AuthController::class, 'home']);

Route::get('/data_table', function(){
    return view('data_table');
});

Route::get('/table', function(){
    return view('table');
});

//CRUD CASTS
// Create
Route::get('/cast/create',[CastController::class, 'create']);
Route::post('/cast',[CastController::class, 'store']);

//Read
Route::get('/cast',[CastController::class, 'index']);
Route::get('/cast/{id}',[CastController::class, 'show']);

//Update 
Route::get('/cast/{id}/edit',[CastController::class, 'edit']);
Route::put('/cast/{id}',[CastController::class, 'update']);

//Delete
Route::delete('/cast/{id}',[CastController::class, 'destroy']);

//CRUD Genre
// Create
Route::get('/genre/create',[CastController::class, 'create']);
Route::post('/genre',[CastController::class, 'store']);

//Read
Route::get('/genre',[CastController::class, 'index']);
Route::get('/genre/{id}',[CastController::class, 'show']);

//Update 
Route::get('/genre/{id}/edit',[CastController::class, 'edit']);
Route::put('/genre/{id}',[CastController::class, 'update']);

//Delete
Route::delete('/genre/{id}',[CastController::class, 'destroy']);


//CRUD Film
// Create
Route::get('/film/create',[CastController::class, 'create']);
Route::post('/film',[CastController::class, 'store']);

//Read
Route::get('/film',[CastController::class, 'index']);
Route::get('/film/{id}',[CastController::class, 'show']);

//Update 
Route::get('/film/{id}/edit',[CastController::class, 'edit']);
Route::put('/film/{id}',[CastController::class, 'update']);

//Delete
Route::delete('/film/{id}',[CastController::class, 'destroy']);