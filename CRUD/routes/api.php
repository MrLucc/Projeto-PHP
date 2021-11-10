<?php

use App\Http\Controllers\CityController;
use Illuminate\Support\Facades\Route;

Route::get('cityAll', [CityController::class,'getAllCitys']);
Route::get('city/{logradouro}', [CityController::class, 'getCityByName']);
Route::post('citySave', [CityController::class, 'postCreateCity']);
Route::put('cityUpdate/{id}', [CityController::class, 'putUpdateCity']);
Route::delete('cityDelete/{id}', [CityController::class,'deleteCity']);
