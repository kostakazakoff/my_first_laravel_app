<?php

namespace App\Http\Controllers;

use App\Models\RealEstates;
use Illuminate\Http\Request;

use function Laravel\Prompts\search;

class RealEstatesController extends Controller
{
    
    # Show all RealEstates objects
    public function listAll(Request $request) {
        // $search = $request->input('search');

        $realEstates = RealEstates::all($columns = [
            'id',
            'title',
            'city',
            'address',
            'bedrooms',
            'bathrooms',
            'price'
        ]);
        
        // $result = array();
        // foreach($realEstates as $re) {
        //     $result[$re['id']] = $re;
        // }

        return response()->json($realEstates);
    }

    # Show single RealEstates object from
    public function show(string $id, Request $request) {        
        $realEstate = RealEstates::select(
            'id',
            'title',
            'city',
            'address',
            'bedrooms',
            'bathrooms',
            'price')
        ->findOrFail($id);

        return response()->json($realEstate);
    }

    # Create RealEstates object
    public function store(Request $request) {
        $data = $request->json()->all();
        // $validatedData = $request->validateWithBag([
        //     'title' => ['required', 'unique:posts', 'max:200'],
        //     'city' => ['required'],
        // ]);

        $realEstate = RealEstates::create($data);

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
        $title = $realEstate['title'];
        $realEstate->delete();

        return response()->json(['message' => $title.' deleted'], 200);
    }
}
