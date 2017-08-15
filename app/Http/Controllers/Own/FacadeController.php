<?php

namespace App\Http\Controllers\Own;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Cache;

class LoginController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    public function redis(){
        $aa = Redis::get('name');
        print_r($aa);
        Redis::lpush('urllist', 'www.sina.com');
        // Cache::store('database')->put('bar11', 'baz22', 1);
        // $value = Cache::get('bar11');
        // print_r($value);
        // echo 'test';
    }
}
