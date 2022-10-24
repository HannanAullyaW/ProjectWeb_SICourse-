<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Pelajar;

class BimbelController extends BaseController
{
    protected $Pelajar;
    public function __construct()
    {
        $this->pelajar = new Pelajar();
    }
    public function index()
    {
        $data = [
            'title' => 'Course Us!'
        ];
        return view('pages/home', $data);
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

    public function register()
    {
        $data = [
            'title' => 'Register',
        ];
        return view('landingpages/register', $data);
    }

    public function pelajaran()
    {
        $data = [
            'title' => 'Pelajaran',
        ];
        return view('dashboard/pelajaran', $data);
    }
    
    
    
}
