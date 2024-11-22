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
        if ($this->validate('libros')) {
            $libroModel->update($id, [
                'titulo' => $this->request->getPost('titulo'),
                'descripcion' => $this->request->getPost('descripcion'),

            ]);

        } else {
            session()->setFlashData([
                'validation' => $this->validator
            ]);
            return redirect()->back()->withInput();
        }
        return redirect()->back()->with('mensaje', 'registro creado');


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

        //  var_dump($librosModel->find($id));

        echo view('Libro/show', [
            'libro' => $libroModel->find($id)
        ]);
    }

    public function new()
    {


        echo view('Libro/new', [
            'libros' => [
                'titulo' => '',
                'descripcion' => ''
            ]
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
        return redirect()->to('Libros')->with('mensaje', 'registro creado');

    }
}


//crear controlador 
//php spark make:controller Libros