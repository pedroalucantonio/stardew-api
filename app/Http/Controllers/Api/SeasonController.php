<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Season;
use Illuminate\Http\Request;

class SeasonController extends Controller
{
    public function index()
    {

        $seasons = Season::all();

        return response()->json($seasons);
    }

    public function show(int $id)
    {
        $season = Season::findOrFail($id);

        return response()->json($season);
    }
}
