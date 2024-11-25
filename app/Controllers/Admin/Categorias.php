<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\models\CategoriaModel;

class Categorias extends BaseController
{
    public function index()
    {
        $categoriaModel = new CategoriaModel();
        echo view('Categoria/index', [
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
        if ($this->validate('categorias')) {
            $categoriaModel->update($id, [
                'titulo' => $this->request->getPost('titulo'),
            ]);

            //echo 'actualizado';
        } else {
            session()->setFlashData([
                'validation' => $this->validator
            ]);
            
        }
        return redirect()->back();

    }

    public function delete($id)
    {
        $categoriaModel = new CategoriaModel();
        $categoriaModel->delete($id);
        return redirect()->back()->with('mensaje',  'registro eliminado');
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
        echo view('Categoria/new', [
            'categorias' => [
                'titulo' => ''
            ]
        ]);
    }



    public function create()
    {
        $categoriaModel = new CategoriaModel();

        if ($this->validate('categorias')) {
            $categoriaModel->insert([
                'titulo' => $this->request->getPost('titulo'),
            ]);

        } else {
            session()->setFlashdata([

                'validation'=>$this->validator
                
            ]);
            return redirect()->back()->withInput();
        }
        return redirect()->to('Categorias')->with('mensaje', 'Registro creado');

    }
}


//crear controlador 
//php spark make:controller Libros