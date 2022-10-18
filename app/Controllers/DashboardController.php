<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard | Course Us!'
        ];
        return view('dashboard/beranda', $data);
    }
}
