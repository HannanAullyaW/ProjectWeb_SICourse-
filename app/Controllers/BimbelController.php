<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class BimbelController extends BaseController
{

    public function __construct()
    {
    }
    public function index()
    {
        $data = [
            'title' => 'Course Us!'
        ];
        return view('pages/home', $data);
    }

    public function register()
    {
        $data = [
            'title' => 'Daftar Sekarang'
        ];
        return view('pages/register', $data);
    }

    public function hubungikami()
    {
        $data = [
            'title' => 'Hubungi kami',
        ];
        return view('pages/hubungikami', $data);
    }

    public function masuk()
    {
        $data = [
            'title' => 'Masuk',
        ];
        return view('pages/masuk', $data);
    }
}
