<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\CategoriaModel;
class CategoriaSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('categoria')->where('id >=', 1)->delete();


        for ($i = 0; $i < 20; $i++) {
            $this->db->table('categoria')->insert([
                'titulo' => "titulo $i"
            ]);
        }
    }
}
