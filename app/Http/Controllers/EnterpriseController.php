<?php

namespace App\Http\Controllers;

use App\Models\Enterprise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EnterpriseController extends Controller
{
    public function index()
    {
        $enterprises = Enterprise::with(['city', 'subcity', 'woreda', 'kebele', 'jobless'])->get();
        return response()->json($enterprises);
    }

    public function store(Request $request)
    {
        $validated = $request->validate(Enterprise::rules());
        $validated['enterprise_password'] = Hash::make($validated['enterprise_password']);
        $enterprise = Enterprise::create($validated);
        return response()->json($enterprise, 201);
    }

    public function show($id)
    {
        $enterprise = Enterprise::with(['city', 'subcity', 'woreda', 'kebele', 'jobless'])->findOrFail($id);
        return response()->json($enterprise);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate(Enterprise::rules());
        if (isset($validated['enterprise_password'])) {
            $validated['enterprise_password'] = Hash::make($validated['enterprise_password']);
        }
        $enterprise = Enterprise::findOrFail($id);
        $enterprise->update($validated);
        return response()->json($enterprise);
    }

    public function destroy($id)
    {
        Enterprise::destroy($id);
        return response()->json(null, 204);
    }
}
