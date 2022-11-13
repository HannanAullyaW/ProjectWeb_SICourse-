<?php

namespace App\Controllers;

use App\Models\PelajaranModel;
use App\Models\PengajarModel;
use App\Models\UserModel;

class Admin extends BaseController
{

    public function __construct()
    {
        $this->request = service("request");
        $this->PelajaranModel = new PelajaranModel();
        $this->PengajarModel = new PengajarModel();
        $this->UserModel = new UserModel();
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
        $dataPelajaran = $this->PelajaranModel->get()->resultID->num_rows;
        $dataPengajar = $this->PengajarModel->get()->resultID->num_rows;
        $dataUser = $this->UserModel->get()->resultID->num_rows;

        $data = [
            'title' => 'Dashboard',
            'dataPelajaran' => $dataPelajaran,
            'dataPengajar' => $dataPengajar,
            'dataUser' => $dataUser,
        ];

        return view('admin/dashboard', $data);
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
        if ($this->request->getMethod() === 'post') {
            $rules =
                [

                    'gambar' => [
                        'label' => 'Gambar',
                        'rules' => 'uploaded[gambar]|is_image[gambar]|max_size[gambar,1024]'
                    ],
                    'judul_pelajaran' => [
                        'label' => 'Nama pelajaran',
                        'rules' => 'required'
                    ],
                    'nama_pengajar' => [
                        'label' => 'Nama pengajar',
                        'rules' => 'required'
                    ],
                    'kategori_pelajaran' => [
                        'label' => 'Kategori pelajaran',
                        'rules' => 'required'
                    ],
                ];

            if ($this->validate($rules)) {
                $gambar = $this->request->getFile('gambar');
                $fileName = time() . $gambar->getClientName();
                $gambar->move('uploads', $fileName);

                $this->db->table('pelajaran')->insert([
                    'judul_pelajaran' => $this->request->getPost('judul_pelajaran'),
                    'nama_pengajar' => $this->request->getPost('nama_pengajar'),
                    'kategori_pelajaran' => $this->request->getPost('kategori_pelajaran'),
                    'gambar' => $fileName
                ]);

                return redirect()->back()->with('success', ' Data Berhasil Disimpan');
            }

            return redirect()->back()->withInput()->with('validation', $this->validator->getErrors());
        }
        $data['gambar'] = $this->db->table('pelajaran')->get()->getResult();

        return view('admin/tambahpelajaran', $data);
    }
}
