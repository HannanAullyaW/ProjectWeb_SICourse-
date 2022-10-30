<?php

namespace App\Models;

use CodeIgniter\Model;

class PelajaranModel extends Model
{
    protected $table = "pelajaran";
    protected $primaryKey = "id_pelajaran";
    protected $useAutoIncrement = true;
    protected $allowedFields = ["judul_pelajaran","nama_pengajar", "kategori_pelajaran","gambar"];
    protected $useTimestamps = false;
    
}