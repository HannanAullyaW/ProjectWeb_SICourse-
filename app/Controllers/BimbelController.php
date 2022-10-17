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

    public function register()
    {

        $pelajar = new Pelajar();

        $data = [
            'title' => 'Daftar Sekarang',
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password'),
            'confirmpassword' => $this->request->getVar('confirmpassword'),
        ];


        $validated = $this->validate([
            'name' => [
                'rules' => 'required|min_length[4]',
                'errors' => [
                    'required' => 'Nama harus diisi',
                    'min_length' => 'Nama minimal 4 karakter'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Email harus diisi',
                    'valid_email' => 'Email tidak valid'
                ]
            ]
        ]);
        if ($validated) {
            $pelajar->insert($data);
            return redirect()->to('/pelajaran');
        } else {
            return redirect()->to('/register')->withInput()->with('errors', $this->validator->getErrors());
        }
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
        return view('pages/pelajaran', $data);
    }
    
    public function pengajar()
    {
        $data = [
            'title' => 'Pengajar',
        ];
        return view('pages/pengajar', $data);
    }
    
}
