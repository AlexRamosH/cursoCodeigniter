<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\LibroModel;

class LibroSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('libros')->where('id >=', 1)->delete();


        for ($i = 0; $i < 20; $i++) {
            $this->db->table('libros')->insert([
                'titulo' => "titulo $i",
                'descripcion' => "descripcion $i"
            ]);
        }
    }
}
