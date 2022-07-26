<?php

use App\Http\Resources\Car as ResourcesCar;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/car/{car}', [\App\Http\Controllers\CarController::class, "show"]);

Route::post("/car/create", [\App\Http\Controllers\CarController::class, "create"]);

Route::get("/cars", [\App\Http\Controllers\CarController::class, "store"]);
