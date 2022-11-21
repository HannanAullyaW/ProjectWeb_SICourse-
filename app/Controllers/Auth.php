<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{


    public function index()
    {
    }

    public function masuk()
    {

        $data = [
            'title' => 'Masuk',
        ];
        if (session('id')) {
            return redirect()->to(site_url('/dashboard/beranda'));
        }


        return view('landingpage/masuk', $data);
    }

    public function prosesMasuk()
    {
        $post = $this->request->getPost();
        $query = $this->db->table('user')->getWhere(['email' => $post['email']]);
        $users = $query->getRow();
        if ($users) {
            if (password_verify($post['password'], $users->password)) {
                $params = ['id' => $users->id];
                session()->set($params);

                $sessLogin = [
                    'isLogin' => true,
                    'username' => $post['username'],
                    'role' => $post['role']
                ];
                $this->session->set($sessLogin);

                return redirect()->to(site_url('dashboard/beranda'));
            } else {
                return redirect()->back()->with('error', 'Password Salah!');
            }
        } else {
            return redirect()->back()->with('error', 'Email tidak ditemukan');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('/'));
    }

    public function register()
    {
        $data = [
            'title' => 'Daftar',
        ];
        if (session('id')) {
            return redirect()->to(site_url('/dashboard/beranda'));
        }
        return view('landingpage/daftar', $data);
    }
    public function regisProcess()
    {
        // $tangkap = $this->request->getPost();
        // $this->validation->run($tangkap, 'register');   
        // $errors = $this->validation->getErrors();

        // if($errors){
        //     session()->setFlashdata('error', $errors);
        //     return redirect()->to('/auth/register');
        // }

        $userModel = model(UserModel::class); // Sesuai Dokumentasi CI4 https://codeigniter.com/user_guide/tutorial/create_news_items.html
        $data = [

            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),

        ];
        $userModel->save($data);
        $session = session();
        session()->setFlashdata('message', 'selamat registrasi berhasil!');
        return redirect()->to('masuk');
    }
}
