<?php

use App\Http\Controllers\amfibiController;
use App\Http\Controllers\avesController;
use App\Http\Controllers\mamaliaController;
use App\Http\Controllers\penggunaControler;
use App\Http\Controllers\piscesController;
use App\Http\Controllers\reptileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// API for users
Route::get('/users', [penggunaControler::class, 'getAllUser']);
Route::get('/users/id/{id}', [penggunaControler::class, 'getUsersId']);
Route::get('/users/name/{username}', [penggunaControler::class, 'getUsersName']);
Route::post('/users', [penggunaControler::class, 'store']);
Route::delete('/users/{id}', [penggunaControler::class, 'delete']);
// API for users

//API for reptile
Route::get('/reptile', [reptileController::class, 'getAllReptile']);
Route::get('/reptile/id/{id}', [reptileController::class, 'getReptileId']);
Route::post('/reptile', [reptileController::class, 'store']);
Route::put('/reptile/{id}', [reptileController::class, 'update']);
Route::delete('/reptile/{id}', [reptileController::class, 'destroy']);
//API for reptile

//API for amfibi
Route::get('/amfibi', [amfibiController::class, 'getAllAmfibi']);
Route::get('/amfibi/id/{id}', [amfibiController::class, 'getAmfibiId']);
Route::post('/amfibi', [amfibiController::class, 'store']);
Route::put('/amfibi/{id}', [amfibiController::class, 'update']);
Route::delete('/amfibi/{id}', [amfibiController::class, 'destroy']);
//API for amfibi

//API for aves
Route::get('/aves', [avesController::class, 'getAllaves']);
Route::get('/aves/id/{id}', [avesController::class, 'getAvesId']);
Route::post('/aves', [avesController::class, 'store']);
Route::put('/aves/{id}', [avesController::class, 'update']);
Route::delete('/aves/{id}', [avesController::class, 'destroy']);
//API for aves

//API for mamalia
Route::get('/mamalia', [mamaliaController::class, 'getAllmamalia']);
Route::get('/mamalia/id/{id}', [mamaliaController::class, 'getMamaliaId']);
Route::post('/mamalia', [mamaliaController::class, 'store']);
Route::put('/mamalia/{id}', [mamaliaController::class, 'update']);
Route::delete('/mamalia/{id}', [mamaliaController::class, 'destroy']);
//API for mamalia

//API for pisces
Route::get('/pisces', [piscesController::class, 'getAllPisces']);
Route::get('/pisces/id/{id}', [piscesController::class, 'getPiscesId']);
Route::post('/pisces', [piscesController::class, 'store']);
Route::put('/pisces/{id}', [piscesController::class, 'update']);
Route::delete('/pisces/{id}', [piscesController::class, 'destroy']);
//API for pisces