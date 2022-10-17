<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Pelajar;

class BimbelController extends BaseController
{

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
            $students->insert($data);
            return redirect()->to('/home');
        } else {
            return redirect()->to('/register')->withInput()->with('errors', $this->validator->getErrors());
        }
        return view('pages/register', $data);
    }
}