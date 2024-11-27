<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\models\LibroModel;

use App\models\CategoriaModel;
class Libros extends BaseController
{
    public function index()
    {
        $categoriaModel = new CategoriaModel();
        $libroModel = new LibroModel();
        echo view('Libro/index', [
            'Libros' => $libroModel->findAll(),
            
            'categorias' => $categoriaModel->findAll()
        ]);
    }

    public function edit($id)
    {
        $libroModel = new LibroModel();
        $categoriaModel = new CategoriaModel();
        $libro = $libroModel->find($id);
        echo view('Libro/edit', [
            'libros' => $libro,
            
            'categorias' => $categoriaModel->find()
        ]);
    }

    public function update($id)
    {
        $libroModel = new LibroModel();
        

        if ($this->validate('libros')) {
            $libroModel->update($id, [
                'titulo' => $this->request->getPost('titulo'),
                'descripcion' => $this->request->getPost('descripcion'),
                'categoria_id' => $this->request->getPost('categoria_id'),
            ]
        );

        } else {
            session()->setFlashData([
                'validation' => $this->validator
            ]);
            return redirect()->back()->withInput();
        }
        return redirect()->back()->with('mensaje', 'registro actualizado');


    }

    public function delete($id)
    {
        $libroModel = new LibroModel();
        $libroModel->delete($id);
        return redirect()->back()->with('mensaje', 'registro eliminado');
    }

    public function show($id)
    {
        $libroModel = new LibroModel();
        $categoriaModel = new CategoriaModel();
        //  var_dump($librosModel->find($id));
        $libro = $libroModel->find($id);
        echo view('Libro/show', [
            'libro' => $libro,
            'categoria' =>  $categoriaModel->find($libro['categoria_id']),
        ]);
    }

    public function new()
    {

        $categoriaModel = new CategoriaModel();
        echo view('Libro/new', [
            'libros' => [
                'titulo' => '',
                'descripcion' => '',
                'categoria_id' => ''
            ],
            'categorias' => $categoriaModel->find()

        ]);
    }



    public function create()
    {
        $libroModel = new LibroModel();
        if ($this->validate('libros')) {
            $libroModel->insert([
                'titulo' => $this->request->getPost('titulo'),
                'descripcion' => $this->request->getPost('descripcion')
            ]);

        } else {
            session()->setFlashdata([

                'validation'=>$this->validator
                
            ]);
            return redirect()->back()->withInput();
        }
        return redirect()->to('Admin/Libros')->with('mensaje', 'registro creado');

    }
}


//crear controlador 
//php spark make:controller Libros