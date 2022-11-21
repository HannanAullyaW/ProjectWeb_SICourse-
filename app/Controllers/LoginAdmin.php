<?php

namespace App\Controllers;
use App\Models\AdminModel;

class LoginAdmin extends BaseController
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
            return redirect()->to(site_url('/admin/dashboard'));
        }


        return view('admin/Login', $data);
    }

    public function prosesMasuk()
    {
        $post = $this->request->getPost();
        $query = $this->db->table('admin')->getWhere();
        $users = $query->getRow();
        if ($users) {
            if(password_verify($post['password'],$users->password)){
                $params=['id'=>$users->id];
                session()->set($params);
                return redirect()->to(site_url('admin/dashboard'));
                
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
		return redirect()->to(base_url('/admin'));
	}
    
    public function register(){
        $data = [
            'title' => 'Daftar',
        ];
        if(session('id')){
            return redirect()->to(site_url('/dashboard/beranda'));
        }
        return view('admin/register',$data);
    }
    public function regisProcess(){
        $AdminModel = model(AdminModel::class); // Sesuai Dokumentasi CI4 https://codeigniter.com/user_guide/tutorial/create_news_items.html
        $data = [
            'username' => $this -> request -> getPost('username'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),

        ];
        $AdminModel->save($data);
        $session = session();
        session()->setFlashdata('message','selamat registrasi berhasil!');
        return redirect()->to('admin');


    }

}
