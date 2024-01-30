<?php

namespace App\Http\Controllers;

use App\Models\Wifi;
use Illuminate\Http\Request;

class WifiController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $wifi = Wifi::get();
        return view('wifi.index', compact('wifi'));
    }

    public function create()
    {
        return view('wifi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'ruang' => 'required',
            'devices' => 'required',
            'parent' => 'required',
            'network' => 'required',
            'ssid' => 'required',
        ]);

        Wifi::create($request->post());

        return redirect()->route('wifi.index')->with('success', 'wifi has been registered successfully.');
    }


    public function show(Wifi $wifi)
    {
        return view('wifi.show', compact('wifi'));
    }

    public function edit(Wifi $wifi)
    {
        return view('wifi.edit', compact('wifi'));
    }

    public function update(Request $request, Wifi $wifi)
    {
        $request->validate([
            'ruang' => 'required',
            'devices' => 'required',
            'parent' => 'required',
            'network' => 'required',
            'ssid' => 'required',
            'preview_url' => 'require'
        ]);

        $wifi->fill($request->post())->save();

        return redirect()->route('wifi.index')->with('success', 'Wifi Has Been updated successfully');
    }

    public function destroy(Wifi $wifi)
    {
        $wifi->delete();
        return redirect()->route('wifi.index')->with('success', 'Wifi has been prune successfully');
    }
}
