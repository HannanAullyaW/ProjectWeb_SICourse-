<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PengajarSeeder extends Seeder
{
    public function run()
    {

        //multi data
        $data = [
            [
                'nama' => 'Satria Sapta',
                'email'    => 'satriasapta48@gmail.com',
                'password'    => password_hash('12345', PASSWORD_BCRYPT),
            ],
            [
                'nama' => 'Rendy Luthfi',
                'email'    => 'rendyluthfi@gmail.com',
                'password'    => password_hash('12345', PASSWORD_BCRYPT),
            ],
            [
                'nama' => 'Aullya Hanan',
                'email'    => 'aullyahananw@gmail.com',
                'password'    => password_hash('12345', PASSWORD_BCRYPT),
            ],
            [
                'nama' => 'Thalia Gemi',
                'email'    => 'thaliagemi@gmail.com',
                'password'    => password_hash('12345', PASSWORD_BCRYPT),
            ],
        ];
        $this->db->table('user')->insertBatch($data);
    }
}
