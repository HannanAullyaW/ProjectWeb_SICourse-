<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function beranda()
    {
        $data = [
            'title' => 'Dashboard | Course Us!'
        ];
        return view('dashboard/beranda', $data);
    }

    public function pengajar()
    {
        $data = [
            'title' => 'Pengajar',
            'gambar' => $this->db->table('pengajar')->get()->getResult()
        ];
        return view('dashboard/pengajar', $data);
    }
    
    public function pelajaran()
    {
        $data = [
            'title' => 'Pelajaran',
            'pelajaran' => $this->db->table('pelajaran')->get()->getResult()
        ];
        return view('dashboard/pelajaran', $data);
    }
    
}
