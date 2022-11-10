<?php

namespace App\Models;

use CodeIgniter\Model;

class PengajarModel extends Model
{
    protected $table = "pengajar";
    protected $primaryKey = "id_pengajar";
    protected $useAutoIncrement = true;
    protected $allowedFields = ["nama_pengajar","bidang_pengajar", "info_pengajar","gambar"];
    protected $useTimestamps = false;
}
