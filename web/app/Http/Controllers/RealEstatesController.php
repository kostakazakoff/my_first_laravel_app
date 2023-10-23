<?php

namespace App\Http\Controllers;

use App\Models\RealEstates;
use Illuminate\Http\Request;

class RealEstatesController extends Controller
{
    # Show all RealEstates objects
    public function listAll() {
        $realEstates = RealEstates::all($columns = ['id', 'title', 'city', 'address', 'bedrooms', 'bathrooms', 'price']);
        // $result = array();

        // foreach($realEstates as $re) {
        //     $result[$re['id']] = $re;
        // }

        return response()->json($realEstates);
    }

    # Show single RealEstates object from
    public function show(string $id, Request $request) {        
        $realEstate = RealEstates::select('id', 'title', 'city', 'address', 'bedrooms', 'bathrooms', 'price')->findOrFail($id);

        // if (!$realEstate) {
        //     return response()->json(['message' => 'Real Estate not found'], 404);
        // }

        return response()->json($realEstate);
    }

    # Create RealEstates object
    public function store(Request $request) {
        $realEstate = RealEstates::create([
            'title' => $request->input('title'),
            'city' => $request->input('city'),
            'address' => $request->input('address'),
            'bedrooms' => $request->input('bedrooms'),
            'bathrooms' => $request->input('bathrooms'),
            'price' => $request->input('price'),
        ]);

        return response()->json($realEstate, 201);
    }

    # Edit RealEstates object
    public function update(Request $request, $id) {
        $realEstate = RealEstates::findOrFail($id);
        $data = $request->json()->all();
        $realEstate->update($data);

        return response()->json($realEstate);
    }

    # Delete RealEstates object
    public function delete($id) {
        $realEstate = RealEstates::findOrFail($id);
        $realEstate->delete();

        return response()->json(['message' => 'Real Estate deleted'], 200);
    }
}
