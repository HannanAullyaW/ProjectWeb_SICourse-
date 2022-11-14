<?php

namespace App\Models;

use CodeIgniter\Model;

class Pengajar extends Model
{
    protected $table = "pengajar";
    protected $primaryKey = "id_pengajar";
    protected $useAutoIncrement = true;
    protected $allowedFields = ["email","password"];
    protected $useTimestamps = false;
}
