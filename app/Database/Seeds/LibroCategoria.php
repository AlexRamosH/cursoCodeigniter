<?php

namespace App\Database\Seeds;

use App\Models\CategoriaModel;
use App\Models\LibroModel;
use CodeIgniter\Database\Seeder;

class LibroCategoria extends Seeder
{
    public function run()
    {
        $libro = new LibroModel();
        $categ = new CategoriaModel();


        $categoria = $categ->limit(6)->findAll();

        foreach ($categoria as $c) {
            for($i=0; $i <7; $i++){
                $libro->insert([
                    'titulo' => "Libro $i",
                    'descripcion' => "dsadsads",
                    'categoria_id' =>  $c['id']
                ]);
            }
        }
    }
}
