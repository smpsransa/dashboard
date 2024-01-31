<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use RouterOS\Query;

class HotspotController extends Controller
{
    private $client;

    function __construct()
    {
        $this->client = new \RouterOS\Client(Config::get('routeros-api'));
    }

    public function index()
    {
        // Create "where" Query object for RouterOS
        $query = (new Query('/ip/address/print'));

        // Send query and read response from RouterOS
        $response = $this->client->query($query)->read();

        // return dd($response);
        return view('hotspot', compact('response'));
    }
}
