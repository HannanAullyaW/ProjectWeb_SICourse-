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
        // $data = [
        //     'title' => 'Masuk',
        // ];
        // if(session('id')){
        //     return redirect()->to(site_url('admin/Dashboard'));
        // }

        return view('admin/login');
    }
    
    public function regisAdmin(){

        // $post = $this->request->getPost();
        // $query = $this->db->table('user')->getWhere(['email' => $post['email']]);
        // $users = $query->getRow();
        // if ($users) {
        //     if(password_verify($post['password'],$users->password)){
        //         $params=['id'=>$users->id];
        //         session()->set($params);
        //         return redirect()->to(site_url('admin/Dashboard'));
                
        //     } else{
        //         return redirect()->back()->with('error', 'Password Salah!');
        //     }
        // } else {
        //     return redirect()->back()->with('error', 'Email tidak ditemukan');
        // }
    }


    public function register()
    {
        return view('admin/register');
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

    public function listpengajar()
    {
        $data['gambar'] = $this->db->table('pengajar')->get()->getResult();

        return view('admin/listpengajar', $data);
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

    public function listpelajaran()
    {
        $data['gambar'] = $this->db->table('pelajaran')->get()->getResult();

        return view('admin/listpelajaran', $data);
    }

    public function tambahpelajaran()
    {
        if ($this->request->getMethod() === 'post') {
            $rules =
                [

                    'gambar' => [
                        'label' => 'Gambar',
                        'rules' => 'uploaded[gambar]'
                    ],
                    'file' => [
                        'label' => 'File',
                        'rules' => 'uploaded[file]'
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
                $file = $this->request->getFile('file');
                $gambar = $this->request->getFile('gambar');
                $fileName = time() . $file->getClientName();
                $fileName2 = time() . $gambar->getClientName();
                $file->move('filepelajaran',$fileName);
                $gambar->move('uploads',$fileName2);

                $this->db->table('pelajaran')->insert([
                    'judul_pelajaran' => $this->request->getPost('judul_pelajaran'),
                    'nama_pengajar' => $this->request->getPost('nama_pengajar'),
                    'kategori_pelajaran' => $this->request->getPost('kategori_pelajaran'),
                    'gambar' => $fileName2,
                    'file' => $fileName
                ]);

                return redirect()->back()->with('success', ' Data Berhasil Disimpan');
            }

            return redirect()->back()->withInput()->with('validation', $this->validator->getErrors());
        }
        $data['gambar'] = $this->db->table('pelajaran')->get()->getResult();

        return view('admin/tambahpelajaran', $data);
    }

    public function hapuspengajar($id)
    {
        $supplier = new PengajarModel();

        $supplier->delete($id);

        session()->setFlashdata('success', 'Data berhasil dihapus');

        return redirect()->to('/admin/tambahpengajar');
    }

    public function editpengajar($id = null)
    {
        if ($id != null) {
            $query = $this->db->table('pengajar')->getWhere(['id_pengajar' => $id]);
            if ($query->resultID->num_rows > 0) {
                $data = [
                    'dataPengajar' => $this->PengajarModel->findAll(),
                    'edit' => $query->getRow()
                ];
                return view('admin/ubahpengajar', $data);
            } else {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function updatepengajar($id)
    {
        $edit = new PengajarModel();
        $gambar = $this->request->getFile('gambar');
        $fileName = time() . $gambar->getClientName();

        $edit->update($id, [
            'nama_pengajar' => $this->request->getVar('nama_pengajar'),
            'bidang_pengajar' => $this->request->getVar('bidang_pengajar'),
            'info_pengajar' => $this->request->getVar('info_pengajar'),
            'gambar' => $fileName,
        ]);
        $gambar->move(ROOTPATH . 'public/uploads',$fileName);
        session()->setFlashdata('success', 'Data berhasil diubah');
        return redirect()->to('/admin/listpengajar');
    }

    public function editpelajaran($id = null)
    {
        if ($id != null) {
            $query = $this->db->table('pelajaran')->getWhere(['id_pelajaran' => $id]);
            if ($query->resultID->num_rows > 0) {
                $data = [
                    'dataPelajaran' => $this->PelajaranModel->findAll(),
                    'edit' => $query->getRow()
                ];
                return view('admin/ubahpelajaran', $data);
            } else {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function updatepelajaran($id)
    {
        $edit = new PelajaranModel();

        $file = $this->request->getFile('file');
        $gambar = $this->request->getFile('gambar');
        $fileName = time() . $file->getClientName();
        $fileName2 = time() . $gambar->getClientName();


        $edit->update($id, [
            'judul_pelajaran' => $this->request->getVar('judul_pelajaran'),
            'nama_pengajar' => $this->request->getVar('nama_pengajar'),
            'kategori_pelajaran' => $this->request->getVar('kategori_pelajaran'),
            'gambar' => $fileName2,
            'file' => $fileName
        ]);

        $file->move(ROOTPATH . 'public/filepelajaran/',$fileName);
        $gambar->move(ROOTPATH . 'public/uploads',$fileName2);
        session()->setFlashdata('success', 'Data berhasil diubah');
        return redirect()->to('/admin/listpelajaran');
    }

   

    public function hapuspelajaran($id)
    {
        $pelajaran = new PelajaranModel();

        $pelajaran->delete($id);

        session()->setFlashdata('success', 'Data berhasil dihapus');

        return redirect()->to('/admin/listpelajaran');
    }

    
}
