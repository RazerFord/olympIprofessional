<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public static function validated(&$request, $rules)
    {
        $obj = new Controller();
        return $obj->validate($request, $rules);
    }
}
