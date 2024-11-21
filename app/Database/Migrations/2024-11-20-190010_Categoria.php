<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Categoria extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => TRUE,
                'constraint' => 10,
                'auto_increment' => TRUE
            ],
            'titulo' => [
                'type' => 'varchar',
                'constraint' => 255,
                'null' => FALSE
            ]
            
            ]);
            //creamos llave primaria
            $this->forge->addkey('id', TRUE);

            //crear tabla
            $this->forge->createTable('categoria');
}
    

    public function down()
    {
        //
        $this->forge->dropTable('categoria');
    }
}
