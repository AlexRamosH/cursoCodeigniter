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
                'unasigned' => TRUE,
                'constraint' => 10,
                'auto_increment' => TRUE
            ],
            'titulo' => [
                'type' => 'varchar',
                'constraint' => 255,
                'null' => FALSE
            ],
            'descripcion' => [
                'type' => 'varchar',
                'constraint' => 255,
                'null' => true
            ]
            ]);
            //creamos llave primaria
            $this->forge->addkey('id', TRUE);

            //crear tabla
            $this->forge->createTable('libros');

        }
          
 

    public function down()
    {
        //
        $this->forge->dropTable('libros');
    }
}
