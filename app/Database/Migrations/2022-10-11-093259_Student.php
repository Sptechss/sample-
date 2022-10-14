<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Student extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'id' => [
                'type' => 'int',
                'auto_increment' => true,
            ],
            'class_id' => [
                'type' => 'int',

            ],
            'name' => [
                'type' => 'varchar',
                'constraint' => 200,
            ],
            'rollno' => [
                'type' => 'varchar',
                'constraint' => 50,
            ],
            'email' => [
                'type' => 'varchar',
                'constraint' => 50,
            ],
            'gender' => [
                'type' => 'varchar',
                'constraint' => 50,
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
        $this->forge->addForeignKey('class_id','studentclass','id' ,'CASCADE', 'CASCADE');
        $this->forge->createTable('students');
    }

    public function down()
    {
        $this->forge->dropTable('students');
    }
}
