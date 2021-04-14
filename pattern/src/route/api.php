<?php


use Illuminate\Support\Facades\Route;
use Zylo\Pattern\App\Controllers\API\PackageController;
use Zylo\Pattern\App\Controllers\API\PostController;
use Zylo\Pattern\App\Controllers\API\TestController;

Route::prefix('api')->group(function () {
    


    Route::apiResource('PackageController', PackageController::class);
    Route::apiResource(strtolower('post'), PostController::class);
});

