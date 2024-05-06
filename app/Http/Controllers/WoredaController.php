<?php

namespace App\Http\Controllers;

use App\Models\Woreda;
use Illuminate\Http\Request;

class WoredaController extends Controller
{
    public function index()
    {
        $woredas = Woreda::all();
        return response()->json($woredas);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'subcity_id' => 'required|exists:subcities,id'
        ]);

        $woreda = Woreda::create($validated);
        return response()->json($woreda, 201);
    }

    public function show(Woreda $woreda)
    {
        return response()->json($woreda);
    }

    public function update(Request $request, Woreda $woreda)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'subcity_id' => 'required|exists:subcities,id'
        ]);

        $woreda->update($validated);
        return response()->json($woreda);
    }

    public function destroy(Woreda $woreda)
    {
        $woreda->delete();
        return response()->json(null, 204);
    }
}
