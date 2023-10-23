<?php

namespace App\Http\Controllers;

use App\Models\RealEstates;
use Illuminate\Http\Request;

class RealEstatesControler extends Controller
{
    # Show all real estates
    public function listAll() {
        $realEstates = RealEstates::all($columns = ['title', 'city', 'address', 'bedrooms', 'bathrooms', 'price']);
        return response()->json($realEstates);
    }

    # Show single real estate
    public function show(string $id, Request $request) {
        // if ($request->accepts(['application/json'])) {
        //     // ...
        // }
        $realEstate = RealEstates::find($id);
        return response()->json(RealEstates::find($id));
    }

    # Create real estates object
    public function create() {
        
    }

    public function update($id) {

    }

    public function delete($id) {

    }
}
