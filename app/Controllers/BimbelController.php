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

    public function testimoni()
    {
        $data = [
            'title' => 'Testimoni',
        ];
        return view('pages/testimoni', $data);
    }

    public function pelajaran()
    {
        $data = [
            'title' => 'Pelajaran',
        ];
        return view('pages/course', $data);
    }
    
    public function pengajar()
    {
        $data = [
            'title' => 'Pengajar',
        ];
        return view('pages/pengajar', $data);
    }
}
