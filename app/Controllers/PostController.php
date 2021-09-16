<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PostController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "Blog - Posts"
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar');
        echo view('v_posts');
        echo view('layouts/footer');
    }
}
