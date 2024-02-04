<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Request;

class AnyFunction
{
    public static function activeMenu($uri = '', $style = ''): string
    {
        $active = '';

        if (explode('/', Request::path())[0] == $uri || Request::is(Request::segment(1) . '/' . $uri . '/*') || Request::is(Request::segment(1) . '/' . $uri) || Request::is($uri)) {
            $active = 'active';
        }
        return $active;
    }

    public static function sideMenu($uri = '', $style = ''): string
    {

        $active = '';
        if (isset($style)) {
            $active = $active . ' ' . $style;
        }

        if (Request::is(Request::segment(1) . '/' . $uri . '/*') || Request::is(Request::segment(1) . '/' . $uri) || Request::is($uri)) {
            $active = 'active';
        }
        return $active;
    }
}
