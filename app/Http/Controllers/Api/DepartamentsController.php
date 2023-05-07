<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;

class DepartamentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $departments = Department::all();
            return response()->json($departments, 200);
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
            $department = Department::create($request->all());
            return response()->json($department, 201);
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
            $departments = Department::find($id);
            return response()->json($departments, 200);
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
            $department = Department::find($id)->update($request->all());
            return response()->json($department, 201);
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
            $department = Department::find($id)->delete();
            return response()->json(['message'=>'usuario Eliminado con exito'], 202);
        } catch (\Throwable $th) {
            return response()->json(['errors'=>$th], 400);
        }
    }
}
