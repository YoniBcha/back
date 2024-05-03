<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{
    /**
     * Store a new service in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        // Validate incoming request data
        $validator = Validator::make($request->all(), [
            'service_title' => 'required|string|max:25',
            'service_definition' => 'required|string'
        ]);

        // If validation fails, return a 422 Unprocessable Entity with the error messages
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Create a new service using the validated data
        $service = new Service;
        $service->service_title = $request->service_title;
        $service->service_definition = $request->service_definition;
        $service->save();

        // Return a 201 Created response with the created service
        return response()->json([
            'message' => 'Service created successfully!',
            'service' => $service
        ], 201);
    }
}
