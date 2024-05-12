<?php

namespace App\Http\Controllers;

use App\Models\Jobless;
use Illuminate\Http\Request;

class JoblessController extends Controller
{
    public function index()
    {
        return response()->json(Jobless::all(), 200);
    }

    public function store(Request $request)
    {
        $jobless = Jobless::create($request->all());
        return response()->json($jobless, 201);
    }

    public function show($id)
    {
        $jobless = Jobless::find($id);
        if ($jobless) {
            return response()->json($jobless, 200);
        }
        return response()->json(['message' => 'Not found'], 404);
    }

    public function update(Request $request, $id)
    {
        $jobless = Jobless::find($id);
        if ($jobless) {
            $jobless->update($request->all());
            return response()->json($jobless, 200);
        }
        return response()->json(['message' => 'Not found'], 404);
    }

    public function destroy($id)
    {
        $jobless = Jobless::find($id);
        if ($jobless) {
            $jobless->delete();
            return response()->json(['message' => 'Deleted'], 200);
        }
        return response()->json(['message' => 'Not found'], 404);
    }
}
