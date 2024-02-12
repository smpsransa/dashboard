<?php

namespace App\Http\Controllers;

use App\Http\Requests\FileImportRequest;
use App\Imports\DbTeachersImport;
use App\Models\DbClass;
use App\Models\DbStudent;
use App\Models\DbTeacher;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class DbTeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = DbTeacher::all();
        // dd($teachers[0]->class->name);
        return view('database.teachers', compact('teachers'));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function fileImport(FileImportRequest $request)
    {
        // $collection = Excel::toCollection(new DbTeachersImport($request->file->extension()), $request->file('file'));
        // dd($collection);
        try {
            Excel::import(new DbTeachersImport($request->file->extension()), $request->file('file')->store('temp'));
            return back();
        } catch (\Error $ex) {
            throw new \Exception('Error:' . $ex->getMessage());
        }
    }
}
