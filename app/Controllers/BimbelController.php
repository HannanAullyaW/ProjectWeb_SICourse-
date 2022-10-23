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

    // public function register()
    // {

    //     $pelajar = new Pelajar();

    //     $data = [
    //         'title' => 'Daftar Sekarang',
    //         'nama' => $this->request->getVar('nama'),
    //         'email' => $this->request- >getVar('email'),
    //         'password' => $this->request->getVar('password'),
    //         'confirmpassword' => $this->request->getVar('confirmpassword'),
    //     ];


    //     $validated = $this->validate([
    //         'name' => [
    //             'rules' => 'required|min_length[4]',
    //             'errors' => [
    //                 'required' => 'Nama harus diisi',
    //                 'min_length' => 'Nama minimal 4 karakter'
    //             ]
    //         ],
    //         'email' => [
    //             'rules' => 'required|valid_email',
    //             'errors' => [
    //                 'required' => 'Email harus diisi',
    //                 'valid_email' => 'Email tidak valid'
    //             ]
    //         ]
    //     ]);
    //     if ($validated) {
    //         $pelajar->insert($data);
    //         return redirect()->to('/pelajaran');
    //     } else {
    //         return redirect()->to('/register')->withInput()->with('errors', $this->validator->getErrors());
    //     }
    //     return view('pages/register', $data);
    // }

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

    

    public function pelajaran()
    {
        $data = [
            'title' => 'Pelajaran',
        ];
        return view('dashboard/pelajaran', $data);
    }
    
    public function pengajar()
    {
        $data = [
            'title' => 'Pengajar',
            'gambar' =>$this->db->table('pengajar')->get()->getResult()
        ];
        return view('dashboard/pengajar', $data);
    }

    public function uploadPengajar()
    {
        if($this->request->getMethod() ==='post'){
            $rules = 
            [
                
                'gambar' =>[
                    'label' => 'Gambar',
                    'rules' => 'uploaded[gambar]|is_image[gambar]|max_size[gambar,1024]'
                ],
                'nama_pengajar' =>[
                    'label' => 'Nama pengajar',
                    'rules' => 'required'
                ],
                'bidang_pengajar' =>[
                    'label' => 'Bidang pengajar',
                    'rules' => 'required'
                ],
                'info_pengajar' =>[
                    'label' => 'Info pengajar',
                    'rules' => 'required'
                ],
            ];

            if($this->validate($rules)){
                $gambar = $this->request->getFile('gambar');
                $fileName = time().$gambar->getClientName();
                $gambar->move('uploads',$fileName);

                $this->db->table('pengajar')->insert([
                    'nama_pengajar' => $this->request->getPost('nama_pengajar'),
                    'bidang_pengajar' => $this->request->getPost('bidang_pengajar'),
                    'info_pengajar' => $this->request->getPost('info_pengajar'),
                    'gambar' => $fileName
                ]);
                
                return redirect()->back()->with('success', ' Data Berhasil Disimpan');
            }

            return redirect()->back()->withInput()->with('validation',$this->validator->getErrors());
        }
         $data['gambar'] = $this->db->table('pengajar')->get()->getResult(); 

        return view('dashboard/tambahPengajar',$data);
    }
    
}
