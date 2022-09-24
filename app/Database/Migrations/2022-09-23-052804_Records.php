<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Records extends Migration
{
 
    
    public function up()
    {

        $this->forge->addField([

            'id' => [
                'type' => 'int',
                'auto_increment' => true,
            ],
            'name' => [
                'type' => 'varchar',
                'constraint' => '200',
            ],
            'email' => [
                'type' => 'varchar',
                'constraint' => '100',
            ],
            'address' => [
                'type' => 'varchar',
                'constraint' => '100'
            ],
            'phone' => [
                'type' => 'int',
                'constraint' => '10',
            ]
        ]);
      
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('records');
    }

    public function down()
    {
        $this->forge->dropTable('records');
    }
}
