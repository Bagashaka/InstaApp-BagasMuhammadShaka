<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePostTable extends Migration
{
   public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'user_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'caption' => [
                'type' => 'TEXT',
            ],
            'image_url' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'created_at' => [
                'type' => 'datetime',
                'null' => true,
            ],
            'updated_at' => [
                'type'=>'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type'=>'DATETIME',
                'null' => true,
            ],  
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('post', true);
    }

    public function down()
    {
        $this->forge->dropTable('post', true);
    }
}
