<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Templating extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "Blog - Posts"
        ];

        return view('v_admin');
    }
}
