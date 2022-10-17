<?php

namespace App\Controllers;

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
        if(session('id')){
            return redirect()->to(site_url('home'));
        }
        return view('pages/masuk', $data);
    }

    public function prosesMasuk()
    {
        $post = $this->request->getPost();
        $query = $this->db->table('user')->getWhere(['email' => $post['email']]);
        $users = $query->getRow();
        if ($users) {
            if(password_verify($post['password'],$users->password)){
                $params=['id'=>$users->id];
                session()->set($params);
                return redirect()->to(site_url('/'));
                
            } else{
                return redirect()->back()->with('error', 'Password Salah!');
            }
        } else {
            return redirect()->back()->with('error', 'Email tidak ditemukan');
        }
    }

}
