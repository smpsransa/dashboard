<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use RouterOS\Query;

class HotspotController extends Controller
{
    private $client, $hotspot, $customer, $router;

    function __construct()
    {
        $ros_version = env('ROS_VERSION', 6);
        $base = $ros_version == 6 ? '/tool/' : '/';

        $hotspotQuery = new Query($base . 'user-manager/user/print');
        $customerQuery = new Query($base . 'user-manager/customer/print');
        $routerQuery = new Query($base . 'user-manager/router/print');


        $this->client = new \RouterOS\Client(Config::get('routeros-api'));
        $this->hotspot = $this->client->query($hotspotQuery)->read();
        $this->customer = $this->client->query($customerQuery)->read();
        $this->router = $this->client->query($routerQuery)->read();
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
        $customer = $this->customer;
        $router = $this->router;
        $response = [
            1 => 'ok'
        ];

        // dd($customer);
        return view('hotspot.setup.index', compact('response', 'ros', 'customer', 'router'));
    }
}
