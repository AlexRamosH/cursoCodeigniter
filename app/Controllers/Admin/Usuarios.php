<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\models\UsuarioModel;

class Usuarios extends BaseController
{


    public function crear_usuario()
    {
        $usuarioModel = new UsuarioModel();

        $usuarioModel->insert([
            'usuario' => 'admin',
            'email' => 'admin@admin.com',
            'contrasena' => $usuarioModel->contrasenaHash('admin')
        ]);
    }

    public function verificar_contrasena()
    {
        $usuarioModel = new UsuarioModel();

        echo $usuarioModel->contrasenaVerificar('admin','ash');
    }

    public function login()
    {
        echo view('web/usuario/login');
    }

    public function login_post()
    {
        $usuarioModel = new UsuarioModel();

        $email = $this->request->getPost('email');
        $contrasena = $this->request->getPost('contrasena');

        $usuario = $usuarioModel->select('id, usuario, email, contrasena, tipo')
        ->orwhere('email',$email)
        ->orwhere('usuario',$email)
        ->first();

        if(!$usuario){
            return redirect()->back()->with('mensaje', 'el usuario no existe');
        }

        if($usuarioModel->contrasenaVerificar($contrasena,$usuario['contrasena']))
        {
            $session = session();
            unset($usuario['contrasena']);
            $session->set(['usuario' =>$usuario]);

            return redirect()->to('Admin/Categorias')->with('mensaje', 'Bienvenido ' .$usuario['usuario']);
        }

        return redirect()->back()->with('mensaje', 'Credenciales incorrectas');
    }



    public function register()
    {
        echo view('web/usuario/registro');
    }



public function register_post(){
    $usuarioModel = new UsuarioModel();

    if($this->validate('usuario'))
    {
        $usuarioModel->insert([
            'usuario' => $this->request->getPost('usuario'),
            'email' => $this->request->getPost('email'),
            'contrasena' => $usuarioModel->contrasenaHash($this->request->getPost('contrasena'))
        ]);
        return redirect()->to('usuario/login')->with('mensaje', 'registro exitoso');
    
    }

    session()->setFlashData([
        'validation' => $this->validator
    ]);

    return redirect()->back()->withInput('mensaje','Credenciales no válidas');
}


function logout(){

    session()->destroy();

    return redirect('usuario/login');

}


}