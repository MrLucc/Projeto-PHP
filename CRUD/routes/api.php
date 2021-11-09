<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;





Route::get('citys', [ApiController::class,'getAllCitys']);
Route::get('citys/{longradouro}', [ApiController::class, 'getCityByName']);
Route::post('citys', [ApiController::class, 'postCreateCity']);
Route::put('citys/{id}', [ApiController::class, 'putUpdateCity']);
Route::delete('citys/{id}', [ApiController::class,'deleteCity']);


