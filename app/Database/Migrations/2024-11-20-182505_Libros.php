<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Libros extends Migration
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
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => FALSE
            ],
            'descripcion' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => TRUE
            ],
            'categoria_id' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => TRUE
            ]
        ]);
        //Creamos llave primaria 
        $this->forge->addKey('id', TRUE);
        $this->forge->addForeignKey('categoria_id', 'categoria', 'id', 'CASCADE', 'CASCADE');

        //Creamos la tabla
        $this->forge->createTable('libros');
    }
          
 

    public function down()
    {
        //
        $this->forge->dropTable('libros');
    }
}
