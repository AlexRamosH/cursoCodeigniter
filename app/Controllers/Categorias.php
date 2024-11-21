<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\models\CategoriaModel;
class Categorias extends BaseController
{
    public function index()
    {
        $categoriaModel = new CategoriaModel();
        echo view('Categoria', [
            'Categorias' => $categoriaModel->findAll()
        ]);
    }

    public function edit($id)
    {
        $categoriaModel = new CategoriaModel();
       
        echo view('categoria/edit', [
            'categorias' => $categoriaModel->find($id)
        ]);
    }

    public function update($id)
    {
        $categoriaModel = new CategoriaModel();

        $categoriaModel->update($id,[
            'titulo' => $this->request->getPost('titulo'),
        ]);

        //echo 'actualizado';
        return redirect()->back();
        
    }

    public function delete($id)
    {
        $categoriaModel = new CategoriaModel();
        $categoriaModel->delete($id);
        return redirect()->back();
    }

    public function show($id)
    {
        $categoriaModel = new CategoriaModel();
       
      //  var_dump($categoriaModel->find($id));
        echo view('categoria/show', [
            'categorias' => $categoriaModel->find($id)
        ]);
    }

    public function new()
    {
        echo view('Categoria/new');
    }

   

    public function create(){
        $categoriaModel = new CategoriaModel();
        $categoriaModel -> insert([
            'titulo' => $this->request->getPost('titulo'),
        ]); 

        return redirect()->to('Categorias');
    }
    
}


//crear controlador 
//php spark make:controller Libros