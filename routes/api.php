<?php

use App\Http\Controllers\API\SerieController;
use App\Models\Serie;
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

Route::get('/series', [SerieController::class, 'index']);
Route::post('/series', [SerieController::class, 'store']);
Route::get('/series/{id}', [SerieController::class, 'show']);
Route::delete('/series/{id}', [SerieController::class, 'destroy']);
Route::put('/series/edit/{id}', [SerieController::class, 'edit']);
