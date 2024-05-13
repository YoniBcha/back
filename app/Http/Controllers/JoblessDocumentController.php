<?php

namespace App\Http\Controllers;

use App\Models\JoblessDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class JoblessDocumentController extends Controller
{
    /**
     * Display a listing of the jobless documents.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents = JoblessDocument::all();
        return response()->json($documents);
    }

    /**
     * Store a newly created jobless document in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), JoblessDocument::validationRules());

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $document = JoblessDocument::create($request->all());
        return response()->json($document, 201);
    }

    /**
     * Display the specified jobless document.
     *
     * @param  \App\Models\JoblessDocument  $joblessDocument
     * @return \Illuminate\Http\Response
     */
    public function show(JoblessDocument $joblessDocument)
    {
        return response()->json($joblessDocument);
    }

    /**
     * Update the specified jobless document in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JoblessDocument  $joblessDocument
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JoblessDocument $joblessDocument)
    {
        $validator = Validator::make($request->all(), JoblessDocument::validationRules());

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $joblessDocument->update($request->all());
        return response()->json($joblessDocument, 200);
    }

    /**
     * Remove the specified jobless document from storage.
     *
     * @param  \App\Models\JoblessDocument  $joblessDocument
     * @return \Illuminate\Http\Response
     */
    public function destroy(JoblessDocument $joblessDocument)
    {
        $joblessDocument->delete();
        return response()->json(null, 204);
    }
}
