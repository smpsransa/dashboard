<?php

namespace App\Http\Controllers;

use App\Models\DbClass;
use Illuminate\Http\Request;

class DbClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classes = DbClass::latest()->get();

        // dd($classes);
        return response()->json(['message'=>'Success','data'=>$classes],200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DbClass $dbClass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DbClass $dbClass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DbClass $dbClass)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DbClass $dbClass)
    {
        //
    }
}
