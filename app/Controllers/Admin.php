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

        return view('admin/login');
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

    public function uploadPengajar()
    {
        if ($this->request->getMethod() === 'post') {
            $rules =
                [

                    'gambar' => [
                        'label' => 'Gambar',
                        'rules' => 'uploaded[gambar]|is_image[gambar]|max_size[gambar,1024]'
                    ],
                    'nama_pengajar' => [
                        'label' => 'Nama pengajar',
                        'rules' => 'required'
                    ],
                    'bidang_pengajar' => [
                        'label' => 'Bidang pengajar',
                        'rules' => 'required'
                    ],
                    'info_pengajar' => [
                        'label' => 'Info pengajar',
                        'rules' => 'required'
                    ],
                ];

            if ($this->validate($rules)) {
                $gambar = $this->request->getFile('gambar');
                $fileName = time() . $gambar->getClientName();
                $gambar->move('uploads', $fileName);

                $this->db->table('pengajar')->insert([
                    'nama_pengajar' => $this->request->getPost('nama_pengajar'),
                    'bidang_pengajar' => $this->request->getPost('bidang_pengajar'),
                    'info_pengajar' => $this->request->getPost('info_pengajar'),
                    'gambar' => $fileName
                ]);

                return redirect()->back()->with('success', ' Data Berhasil Disimpan');
            }

            return redirect()->back()->withInput()->with('validation', $this->validator->getErrors());
        }
        $data['gambar'] = $this->db->table('pengajar')->get()->getResult();

        return view('admin/tambahPengajar', $data);
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
