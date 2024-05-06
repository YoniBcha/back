<?php
namespace App\Http\Controllers;

use App\Models\Subcity;
use Illuminate\Http\Request;

class SubcityController extends Controller
{
    // Get all subcities
    public function index()
    {
        $subcities = Subcity::all();
        return response()->json($subcities);
    }

    // Store a new subcity
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'city_id' => 'required|exists:cities,id'
        ]);

        $subcity = Subcity::create($validated);
        return response()->json($subcity, 201);
    }

    // Show a specific subcity
    public function show(Subcity $subcity)
    {
        return response()->json($subcity);
    }

    // Update a subcity
    public function update(Request $request, Subcity $subcity)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'city_id' => 'required|exists:cities,id'
        ]);

        $subcity->update($validated);
        return response()->json($subcity);
    }

    // Delete a subcity
    public function destroy(Subcity $subcity)
    {
        $subcity->delete();
        return response()->json(null, 204);
    }
}
