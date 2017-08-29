<?php

namespace App\Http\Controllers\Own;

use CustomTool;
use App;
use App\Http\Controllers\Controller;
class FacadeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    public function king(){
        echo array(1, 2, 3)[0];
echo [1, 2, 3][0];
  
echo "foobar"[4];

        
        exit;
        CustomTool::query();
    }

    public function xrange($start = 1, $limit=6, $step = 1) {
        for ($i = $start; $i <= $limit; $i += $step) {
                yield $i;
            }   
    }
}
