<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\models\LibroModel;
class Libros extends BaseController
{
    public function index()
    {
        $libroModel = new LibroModel();
        echo view('Libreria', [
            'Libros' => $libroModel->findAll()
        ]);
    }

    public function edit($id)
    {
        $libroModel = new LibroModel();
       
        echo view('Libro/edit', [
            'libros' => $libroModel->find($id)
        ]);
    }

    public function update($id)
    {
        $libroModel = new LibroModel();

        $libroModel->update($id,[
            'titulo' => $this->request->getPost('titulo'),
            'descripcion' => $this->request->getPost('descripcion'),

        ]);

        return redirect()->back();
        
    }

    public function delete($id)
    {
        $libroModel = new LibroModel();
        $libroModel->delete($id);
        return redirect()->back();
    }

    public function show($id)
    {
        $libroModel = new LibroModel();

      //  var_dump($librosModel->find($id));

      echo view('Libro/show', [
        'libro' => $libroModel->find($id)
      ]);
    }

    public function new()
    {
        echo view('Libro/new');
    }

   

    public function create(){
        $libroModel = new LibroModel();
        $libroModel -> insert([
            'titulo' => $this->request->getPost('titulo'),
            'descripcion' => $this->request->getPost('descripcion')
        ]);

        return redirect()->to('Libros');

    }

}


//crear controlador 
//php spark make:controller Libros