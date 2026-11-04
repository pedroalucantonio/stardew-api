<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Seed;
use Illuminate\Http\Request;

class SeedController extends Controller
{
        public function index()
    {
        $seeds = Seed::all();

        return response()->json($seeds);
    }

    public function store(Request $request)
    {
        $seed = Seed::create($request->all());

        return response()->json($seed, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $seed = Seed::findOrFail($id);

        return response()->json($seed);
    }

    public function update(Request $request, int $id)
    {
        $seed = Seed::findOrFail($id);
        $seed->update($request->all());

        return response()->json($seed);
    }

    public function destroy(int $id)
    {
        $seed = Seed::findOrFail($id);
        $seed->delete();

        return response()->noContent();
    }
}
