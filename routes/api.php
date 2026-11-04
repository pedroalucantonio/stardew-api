<?php

use App\Http\Controllers\Api\SeedController;
use App\Http\Controllers\Api\SeasonController;
use Illuminate\Support\Facades\Route;

Route::apiResource('seasons', SeasonController::class)
    ->only(['index', 'show'])
    ->whereNumber('season');

Route::apiResource('seeds', SeedController::class)
    ->whereNumber('seed');