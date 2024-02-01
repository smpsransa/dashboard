<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use RouterOS\Query;

class HotspotController extends Controller
{
    // private $client;

    // function __construct()
    // {
    //     $this->client = new \RouterOS\Client(Config::get('routeros-api'));
    // }

    public function index()
    {
        $query = (new Query('/ip/address/print'));

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

        return view('hotspot', compact('response'));
    }

    public function user()
    {
        $query = (new Query('/user-manager/user/print'));

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
}
