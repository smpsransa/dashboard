<?php

namespace App\Http\Controllers;

use App\Http\Requests\FileImportRequest;
use App\Imports\DbStudentsImport;
use App\Models\DbStudent;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class DbStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = DbStudent::latest()->get();
        return view('database.students', compact('students'));
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
        try {
            Excel::import(new DbStudentsImport($request->file->extension()), $request->file('file')->store('temp'));
            return back();
        } catch (\Error $ex) {
            throw new \Exception('Error:' . $ex->getMessage());
        }
    }
}
