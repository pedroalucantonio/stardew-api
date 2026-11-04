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

    public function store(Request $request)
    {
        $season = Season::create($request->all());

        return response()->json($season, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $season = Season::findOrFail($id);

        return response()->json($season);
    }

    public function update(Request $request, int $id)
    {
        $season = Season::findOrFail($id);
        $season->update($request->all());

        return response()->json($season);
    }

    public function destroy(int $id)
    {
        $season = Season::findOrFail($id);
        $season->delete();

        return response()->noContent();
    }
}
