<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Subjected extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'id' => [
                'type' => 'int',
                'auto_increment' => true,
            ],
            'subjects' => [
                'type' => 'varchar',
                'constraint' => '200',
            ],
            'class_id' => [
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
            ]
        ]);
        $this->forge->addPrimaryKey('id', true);
        $this->forge->addforeignKey('class_id','studentclass', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('subjected');
    }

    public function down()
    {
        $this->forge->dropTable('subjected'); 
    }
}

