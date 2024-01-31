<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::get();
        return view('service.index', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'url' => 'required',
            'description' => 'required',
        ]);

        Service::create($request->post());

        return redirect()->route('service.index')->with('success', 'Service has been initiated successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('service.show', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'url' => 'required',
            'description' => 'required',
        ]);

        $service->fill($request->post())->save();

        return redirect()->route('service.index')->with('success', 'Services Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('service.index')->with('success', 'Services has been detach successfully');
    }

    public function create()
    {
        return view('service.create');
    }

    public function edit(Service $service)
    {
        return view('service.edit', compact('service'));
    }
}
