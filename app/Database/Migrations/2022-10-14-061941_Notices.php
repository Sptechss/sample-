<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Notices extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'id' => [
                'type' => 'int',
                'auto_increment' => true,
            ],
            'notice' => [
                'type' => 'varchar',
                'constraint' =>200,

            ],
            'status' => [
                'type' => 'int',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addPrimaryKey('id',true);
        $this->forge->createTable('notices');
    }

    public function down()
    {
        $this->forge->dropTable('notices');
    }
    
}
