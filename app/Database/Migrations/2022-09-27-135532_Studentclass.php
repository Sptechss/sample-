<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Studentclass extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'id' => [
                'type' => 'int',
                'auto_increment'=> true,
            ],
            'class' => [
                'type' => 'varchar',
                'constraint' => '200',
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

        $this->forge->addPrimaryKey('id',true);
        $this->forge->createTable('studentclass');
    }

    public function down()
    {
        $this->forge->dropTable('studentclass');
    }
}
