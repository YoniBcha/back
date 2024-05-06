<?php
namespace App\Http\Controllers;

use App\Models\Kebele;
use Illuminate\Http\Request;

class KebeleController extends Controller
{
    public function index()
    {
        $kebeles = Kebele::all();
        return response()->json($kebeles);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'woreda_id' => 'required|exists:woredas,id'
        ]);

        $kebele = Kebele::create($validated);
        return response()->json($kebele, 201);
    }

    public function show(Kebele $kebele)
    {
        return response()->json($kebele);
    }

    public function update(Request $request, Kebele $kebele)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'woreda_id' => 'required|exists:woredas,id'
        ]);

        $kebele->update($validated);
        return response()->json($kebele);
    }

    public function destroy(Kebele $kebele)
    {
        $kebele->delete();
        return response()->json(null, 204);
    }
}
