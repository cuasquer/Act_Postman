<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\School;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $schools = School::all();
            return response()->json($schools, 200);
        } catch (\Throwable $th) {
            return response()->json(['errors'=>$th], 403);
        }
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $school = School::create($request->all());
            return response()->json($school, 201);
        } catch (\Throwable $th) {
            return response()->json(['errors'=>$th], 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $schools = School::find($id);
            return response()->json($schools, 200);
        } catch (\Throwable $th) {
            return response()->json(['errors'=>$th], 400);
        }
    }

    /**


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $school = School::find($id)->update($request->all());
            return response()->json($school, 201);
        } catch (\Throwable $th) {
            return response()->json(['errors'=>$th], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $school = School::find($id)->delete();
            return response()->json(['message'=>'usuario Eliminado con exito'], 202);
        } catch (\Throwable $th) {
            return response()->json(['errors'=>$th], 400);
        }
    }
}
