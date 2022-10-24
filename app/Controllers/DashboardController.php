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

    public function pengajar()
    {
        $data = [
            'title' => 'Pengajar',
            'gambar' => $this->db->table('pengajar')->get()->getResult()
        ];
        return view('dashboard/pengajar', $data);
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

        return view('dashboard/tambahPengajar', $data);
    }
}
