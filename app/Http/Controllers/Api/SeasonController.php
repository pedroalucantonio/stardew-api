<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SeasonResource;
use App\Services\SeasonService;

class SeasonController extends Controller
{
    public function __construct(
        private SeasonService $seasonService
    ) {}

    public function index()
    {
        $seasons = $this->seasonService->listAll();

        return SeasonResource::collection($seasons);
    }

    public function show(int $id)
    {
        $season = $this->seasonService->findById($id);

        return SeasonResource::make($season);
    }
}
