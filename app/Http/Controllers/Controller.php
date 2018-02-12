<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    /**
     * Show main page
     * 
     * @return Response
     */
    public function main() {
        return "Hello world!";
    }
}
