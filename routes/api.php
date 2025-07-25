<?php

use App\Http\Controllers\Api\LocationsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['check_user_token'])->group(function () {
    Route::get('/', function(){
        return "ola mundo";
    });

    Route::group(["prefix" => "locations"], function(){
        Route::get("", [LocationsController::class, "index"]);
        Route::post("", [LocationsController::class, "store"]);
        Route::get('/{id}', [LocationsController::class, 'find']);
        Route::post('/{id}', [LocationsController::class, 'update']);
        Route::delete('/{id}', [LocationsController::class, 'delete']);
    });
});