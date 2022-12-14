<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = "user";
    protected $primaryKey = "id";
    protected $useAutoIncrement = true;
    protected $allowedFields = ["nama","email", "password",];
    protected $useTimestamps = false;
    
}