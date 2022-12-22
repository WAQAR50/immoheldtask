<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PropertyListing extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'p_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'p_title' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'p_address' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
			'p_price' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
			'p_size' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('p_id', true);
        $this->forge->createTable('property_listing');

    }

    public function down()
    {
        $this->forge->dropTable('property_listing');
    }
}
