<?php

namespace App\Http\Controllers;

use SoulDoit\SetEnv\Env;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use RouterOS\Query;

class SetupApiController extends Controller
{
    private $client, $envFile, $objData;

    function __construct()
    {
        $this->envFile = app()->environmentFilePath();

        try {
            $this->objData = file_get_contents($this->envFile);
            $this->client = new \RouterOS\Client(Config::get('routeros-api'));
        } catch (\Exception $e) {
            Redirect::to('/error')->send();
        }
    }

    private function replaceKey($key, $value)
    {
        return preg_replace("/$key=.*/i", "$key=$value", $this->objData);
    }

    public function index()
    {
        $ros = (object)Config::get('routeros-api');
        return view('hotspot.setup.index', compact('ros'));
    }

    public function api()
    {
        // about app config -> to api address
        $ros = (object)[
            'host' => env('ROS_HOST', '192.168.88.1'), // Address of Mikrotik RouterOS
            'user' => env('ROS_USER', 'admin'),        // Username
            'pass' => env('ROS_PASS', null),           // Password
            'port' => (int)env('ROS_PORT', 8728),           // RouterOS API port number for access (if not set use default or default with SSL if SSL enabled
            'version' => (int)env('ROS_VERSION', 6),
        ];
        // dd($ros);
        return view('hotspot.setup.api', compact('ros'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'host' => 'required|max:255',
            'user' => 'required',
            'port' => 'required',
            'version' => 'required',
        ]);

        // retrieve data
        $form = (object)$request->all();

        // parse data
        $this->objData = $this->replaceKey('ROS_HOST', $form->host);
        $this->objData = $this->replaceKey('ROS_USER', $form->user);
        $this->objData = $this->replaceKey('ROS_PASS', $form->pass);
        $this->objData = $this->replaceKey('ROS_PORT', $form->port);
        $this->objData = $this->replaceKey('ROS_VERSION', $form->version);

        // write data
        file_put_contents($this->envFile, $this->objData);

        return Redirect::refresh();
    }

    public function reset()
    {
        $default = (object)Config::get('routeros-api');

        $this->objData = $this->replaceKey('ROS_HOST', $default->host);
        $this->objData = $this->replaceKey('ROS_USER', $default->user);
        $this->objData = $this->replaceKey('ROS_PASS', $default->pass);
        $this->objData = $this->replaceKey('ROS_PORT', $default->port);
        $this->objData = $this->replaceKey('ROS_VERSION', 6);

        file_put_contents($this->envFile, $this->objData);

        return Redirect::refresh();

        // return Redirect::back()->with('message', 'Operation Successful !');
    }
}
