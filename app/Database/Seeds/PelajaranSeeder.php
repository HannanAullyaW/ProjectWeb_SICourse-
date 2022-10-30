<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PelajaranSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'judul_pelajaran' => 'Soal TWK Tahun 2010',
                'nama_pengajar'    => 'Robert Einstein',
                'kategori_pelajaran'    => 'TWK',
                'gambar' => 'soal1.jpg'
            ],
            [
                'judul_pelajaran' => 'Soal TIU Tahun 2015',
                'nama_pengajar'    => 'Cassandra Putri',
                'kategori_pelajaran'    => 'TIU',
                'gambar' => 'soal2.jpg'
            ],
            [
                'judul_pelajaran' => 'Soal TIU Tahun 2017',
                'nama_pengajar'    => 'Cassandra Putri',
                'kategori_pelajaran'    => 'TIU',
                'gambar' => 'soal3.jpg'
            ],
            [
                'judul_pelajaran' => 'Soal TKP Tahun 2016',
                'nama_pengajar'    => 'Sutarmi Wati',
                'kategori_pelajaran'    => 'TKP',
                'gambar' => 'soal4.jpg'
            ],
            [
                'judul_pelajaran' => 'Soal TWK Tahun 2020',
                'nama_pengajar'    => 'Robert Einstein',
                'kategori_pelajaran'    => 'TWK',
                'gambar' => 'soal5.jpeg'
            ],
            [
                'judul_pelajaran' => 'Soal TWK Tahun 2018',
                'nama_pengajar'    => 'Robert Einstein',
                'kategori_pelajaran'    => 'TWK',
                'gambar' => 'soal1.jpg'
            ],
           
        ];
        $this->db->table('pelajaran')->insertBatch($data);
    }
}
