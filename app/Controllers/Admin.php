<?php

namespace App\Controllers;

class Admin extends BaseController
{
<<<<<<< HEAD
    
    public function __construct()
    {
        $this->session = session();
    }
    
    public function index()
    {
        //cek apakah ada session bernama isLogin
        if(!$this->session->has('isLogin')){
            return redirect()->to('/auth/login');
        }
        
        //cek role dari session
        if($this->session->get('role') != 1){
            return redirect()->to('/user');
        }
        
        return view('admin/index');
        
    }
    
=======
    public function admin()
    {
        return view('admin/adminLogin');
    }
>>>>>>> 3fa491a1c7d37ba2d43c7dcbe0a8f9567bca89c4
}