<?php

namespace App\Controllers;

class Admin extends BaseController
{

    public function __construct()
    {
        $this->session = session();
    }

    public function login()
    {
        // //cek apakah ada session bernama isLogin
        // if (!$this->session->has('isLogin')) {
        //     return redirect()->to('admin/Login');
        // }

        // //cek role dari session
        // if ($this->session->get('role') != 1) {
        //     return redirect()->to('/user');
        // }

        return view('admin/Login');
    }

    public function dashboard()
    {
        return view('admin/dashboard');
    }

    public function tambahpengajar()
    {
        $data = [
            'title' => 'Tambah Pengajar',
            'gambar' => $this->db->table('pengajar')->get()->getResult()
        ];
        return view('admin/tambahpengajar', $data);
    }

    public function tambahpelajaran()
    {
        $data = [
            'title' => 'Tambah Pelajaran',
            'gambar' => $this->db->table('pelajaran')->get()->getResult()
        ];
        return view('admin/tambahpelajaran', $data);
    }
}
