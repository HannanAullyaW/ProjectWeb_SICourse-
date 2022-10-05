<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class BimbelController extends BaseController
{
    public function index()
    {
        return view('pages/home');
    }
}
