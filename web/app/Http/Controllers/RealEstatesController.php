<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEstateRequest;
use App\Models\RealEstate;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

use function Laravel\Prompts\search;

class RealEstatesController extends Controller
{
 
    public function list(): ?JsonResponse {
        $list = RealEstate::all();

        $result = array();

        $result['estates'] = $list;

        return response()->json($result);
    }

    public function show(string $id): JsonResponse {        
        $realEstate = RealEstate::findOrFail($id);

        return response()->json($realEstate);
    }

    public function store(StoreEstateRequest $request): JsonResponse {
        $data = $request->json()->all();
        
        $realEstate = RealEstate::create($data);

        return response()->json($realEstate, 201);
    }

    public function update(Request $request, string $id): JsonResponse {
        $realEstate = RealEstate::findOrFail($id);

        $data = $request->json()->all();

        $realEstate->update($data);

        return response()->json($realEstate);
    }

    public function delete(string $id): JsonResponse {
        $realEstate = RealEstate::findOrFail($id);
        
        $realEstate->delete();

        return response()->json(['message' => $realEstate['title'].' deleted']);
    }
}
