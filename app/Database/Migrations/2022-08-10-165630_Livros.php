<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Estoque extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=> [
            'type'=>'int',
            'auto_increment'=>true
            ],
            'Nome'=>[
                'type'=>'varchar',
                'constraint' =>100
            ],
            'Autor'=>[
                'type'=>'varchar',
                'constraint' =>100
            ],
            'Editora'=>[
                'type'=>'varchar',
                'constraint' =>100
            ],
            'valor'=>[
                'type'=>'double',
            ],
            ]);
            $this->forge->addkey('id',true);
            $this->forge->createTable('estoque');
    }

    public function down()
    {
        $this->forge->dropTable('estoque');
    }
}