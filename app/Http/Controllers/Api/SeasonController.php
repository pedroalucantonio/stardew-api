<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\SeasonService;
use Illuminate\Http\Request;

class SeasonController extends Controller
{
    public function __construct(
        private SeasonService $seasonService
    ) {}

    public function index()
    {
        $seasons = $this->seasonService->listAll();

        return response()->json($seasons);
    }

    public function show(int $id)
    {
        $season = $this->seasonService->findById($id);

        return response()->json($season);
    }
}
