<?php

use App\Http\Controllers\Api\SeasonController;
use App\Http\Controllers\Api\SeedController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Carbon;

Route::apiResource('seasons', SeasonController::class)
    ->only(['index', 'show'])
    ->whereNumber('season');

Route::apiResource('seeds', SeedController::class)
    ->whereNumber('seed');

Route::get('/estacao-atual', function () {
    $data = Carbon::today('America/Sao_Paulo');
    # $data = Carbon::parse('2026-06-31', 'America/Sao_Paulo');

    return response()->json([
        'data' => $data->toDateString(),
        'estacao' => $data->getSouthernSeasonName(),
    ]);
});