<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminPostsController extends BaseController
{
    public function index()
    {
        return view("posts/index");
    }

    public function create()
    {
        return view("posts/create");
    }

    public function store()
    {
    }
}
