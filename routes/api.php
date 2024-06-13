<?php
use App\Http\Controllers\PostAPIController;
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

Route::get('posts/all', [PostAPIController::class, 'index']);
Route::get('posts/{id}', [PostAPIController::class, 'show']);
//Route::get('posts/all', 'App\Http\Controllers\PostAPIController@index'); //Depende de ruta de controlador, si esta cambia es un problema