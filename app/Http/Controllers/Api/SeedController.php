<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SeedResource;
use App\Services\SeedService;
use Illuminate\Http\Request;

class SeedController extends Controller
{
    public function __construct(
        private SeedService $seedService
    ) {}

    public function index()
    {
        $seeds = $this->seedService->listAll();

        return SeedResource::collection($seeds);
    }

    public function store(Request $request)
    {
        $seed = $this->seedService->create($request->all());

        return SeedResource::make($seed->load('seasons:id,name'))
            ->response()
            ->setStatusCode(201);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $seed = $this->seedService->findById($id);

        return SeedResource::make($seed);
    }

    public function update(Request $request, int $id)
    {
        $seed = $this->seedService->update($id, $request->all());

        return SeedResource::make($seed->load('seasons:id,name'));
    }

    public function destroy(int $id)
    {
        $this->seedService->delete($id);

        return response()->noContent();
    }
}
