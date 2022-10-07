<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class BimbelController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Course Us!'
        ];
        return view('pages/home',$data);
    }
    public function register()
    {
        $data = [
            'title' => 'Daftar Sekarang'
        ];
        return view('pages/register', $data);
    }

}
