<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        return City::all();
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string']);
        $city = City::create($request->only('name'));
        return response()->json($city, 201);
    }

    public function show(City $city)
    {
        return $city;
    }

    public function update(Request $request, City $city)
    {
        $request->validate(['name' => 'required|string']);
        $city->update($request->only('name'));
        return $city;
    }

    public function destroy(City $city)
    {
        $city->delete();
        return response()->json(null, 204);
    }
}
