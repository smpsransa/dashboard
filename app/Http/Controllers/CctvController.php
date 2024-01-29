<?php

namespace App\Http\Controllers;

use App\Models\Cctv;
use Illuminate\Http\Request;

class CctvController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cctv = Cctv::orderBy('id', 'desc')->get();
        return view('cctv.index', compact('cctv'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cctv.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
        ]);

        Cctv::create($request->post());

        return redirect()->route('cctv.index')->with('success', 'Cctv has been registered successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cctv $cctv)
    {
        return view('cctv.show', compact('cctv'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cctv $cctv)
    {
        return view('cctv.edit', compact('cctv'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cctv $cctv)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
        ]);

        $cctv->fill($request->post())->save();

        return redirect()->route('cctv.index')->with('success', 'Cctv Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cctv $cctv)
    {
        $cctv->delete();
        return redirect()->route('cctv.index')->with('success', 'Cctv has been prune successfully');
    }
}
