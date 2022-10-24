<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pelajaran extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pelajaran' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'judul_pelajaran' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'kategori_pelajaran' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'gambar' => [
                'type'       => 'VARCHAR',
                'constraint' => '150',
            ],
        ]);
        $this->forge->addKey('id_pelajaran', true);
        $this->forge->createTable('pelajaran');
    }

    public function down()
    {
        $this->forge->dropTable('pelajaran');
    }
}
