<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class LandingpageController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Landing Page | Course Us!'
        ];
        return view('landingpage/beranda', $data);
    }

    public function testimoni()
    {
        $data = [
            'title' => 'Testimoni',
        ];
        return view('landingpage/testimoni', $data);
    }

    public function hubungikami()
    {
        $data = [
            'title' => 'Hubungi kami',
        ];
        return view('landingpage/hubungikami', $data);
    }
}
