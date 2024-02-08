<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use RouterOS\Query;

class SetupController extends Controller
{
    private $client;

    function __construct()
    {
        try {
            $this->client = new \RouterOS\Client(Config::get('routeros-api'));
        } catch (\Exception $e) {
            Redirect::to('/error')->send();
        }
    }

    public function index()
    {
        $ros = (object)Config::get('routeros-api');
        return view('hotspot.setup.index', compact('ros'));
    }

    public function api()
    {
        $ros = (object)Config::get('routeros-api');

        return view('hotspot.setup.api', compact('ros'));
    }

    public function hs()
    {
        $hotspotQuery = new Query('/ip/hotspot/print');
        $hs = (object)$this->client->query($hotspotQuery)->read()[0];

        return view('hotspot.setup.hs', compact('hs'));
    }

    public function userman()
    {
        $ros_version = env('ROS_VERSION', 6);
        $base = $ros_version == 6 ? '/tool/' : '/';


        $customerQuery = new Query($base . 'user-manager/customer/print');
        $routerQuery = new Query($base . 'user-manager/router/print');
        $customer = $this->client->query($customerQuery)->read();
        $router = $this->client->query($routerQuery)->read();

        return view('hotspot.setup.userman', compact('customer', 'router'));
    }
}
