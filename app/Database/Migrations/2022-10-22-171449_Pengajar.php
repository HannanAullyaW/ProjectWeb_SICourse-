<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pengajar extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pengajar' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_pengajar' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'info_pengajar' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'gambar' => [
                'type'       => 'VARCHAR',
                'constraint' => '150',
            ],
        ]);
        $this->forge->addKey('id_pengajar', true);
        $this->forge->createTable('pengajar');
    }

    public function down()
    {
        $this->forge->dropTable('pengajar');
    }
}
