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
                'nama_pengajar' => 'Robert Einstein',
                'bidang_pengajar'    => 'TWK',
                'info_pengajar'    => 'TWK itu gampang dipahami adik adik',
                'gambar' => 'guru.jpg'
            ],
            [
                'nama_pengajar' => 'Cassandra Putri',
                'bidang_pengajar'    => 'TKP',
                'info_pengajar'    => 'TKP itu pilih yang paling baik diantara yang baik',
                'gambar' => 'guru3.jpg'
            ],
            [
                'nama_pengajar' => 'Cassandra Putri',
                'bidang_pengajar'    => 'TIU',
                'info_pengajar'    => 'TIU soal mudah dengan cara yang tepat',
                'gambar' => 'guru2.jpg'
            ],
        ];
        $this->db->table('pengajar')->insertBatch($data);
    }
}
