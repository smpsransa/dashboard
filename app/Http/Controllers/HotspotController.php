<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use RouterOS\Query;

class HotspotController extends Controller
{
    private $base, $client, $hotspot;

    function __construct()
    {
        $ros_version = env('ROS_VERSION', 6);
        $this->base = $ros_version == 6 ? '/tool/' : '/';

        $hotspotQuery = new Query($this->base . 'user-manager/user/print');


        try {
            $this->client = new \RouterOS\Client(Config::get('routeros-api'));
        } catch (\Exception $e) {
            Redirect::to('/')->send();
        }
        $this->hotspot = $this->client->query($hotspotQuery)->read();
    }

    public function index()
    {
        $query = new Query('/ip/address/print');

        try {
            $client = new \RouterOS\Client(Config::get('routeros-api'));
            $response = $client->query($query)->read();
        } catch (Exception $e) {
            $message = $e->getMessage();
            var_dump('Exception Message: ' . $message);

            // $code = $e->getCode();
            // var_dump('Exception Code: ' . $code);

            // $string = $e->__toString();
            // var_dump('Exception String: ' . $string);

            exit;
        }

        return view('hotspot.index', compact('response'));
    }

    public function hotspotUser()
    {
        $query = new Query('/user-manager/user/print');

        try {
            $client = new \RouterOS\Client(Config::get('routeros-api'));
            $response = $client->query($query)->read();
        } catch (Exception $e) {
            $message = $e->getMessage();
            var_dump('Exception Message: ' . $message);

            // $code = $e->getCode();
            // var_dump('Exception Code: ' . $code);

            // $string = $e->__toString();
            // var_dump('Exception String: ' . $string);

            exit;
        }

        dd($response[0]);
        // return view('hotspot.user', compact('response'));
    }

    public function hotspotSetup()
    {
        $customerQuery = new Query($this->base . 'user-manager/customer/print');
        $routerQuery = new Query($this->base . 'user-manager/router/print');
        $hotspotQuery = new Query('/ip/hotspot/print');
        // $query = new Query('/user-manager/user/print');

        // try {
        //     $client = new \RouterOS\Client(Config::get('routeros-api'));
        //     $response = $client->query($query)->read();
        // } catch (Exception $e) {
        //     $message = $e->getMessage();
        //     var_dump('Exception Message: ' . $message);

        //     // $code = $e->getCode();
        //     // var_dump('Exception Code: ' . $code);

        //     // $string = $e->__toString();
        //     // var_dump('Exception String: ' . $string);

        //     exit;
        // }

        // dd($response[0]);

        $ros = (object)Config::get('routeros-api');
        $customer = $this->client->query($customerQuery)->read();
        $router = $this->client->query($routerQuery)->read();
        $hs = (object)$this->client->query($hotspotQuery)->read()[0];

        $response = [
            1 => 'ok'
        ];

        // dd($hs);
        return view('hotspot.setup.index', compact('response', 'ros', 'customer', 'router', 'hs'));
    }
}
