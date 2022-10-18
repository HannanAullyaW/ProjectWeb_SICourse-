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
            return redirect()->to(site_url('dashboard/beranda'));
        }
        return view('landingpage/masuk', $data);
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
                return redirect()->to(site_url('dashboard/beranda'));
                
            } else{
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

}
