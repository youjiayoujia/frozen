<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class CustomTool extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'custom_tool';
    }
}