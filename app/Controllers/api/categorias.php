<?php 

namespace App\Controllers\Api;

use App\Database\Migrations\Categoria;
use CodeIgniter\RESTful\ResourceController;
use App\Models\CategoriaModel;

class Categorias extends ResourceController
{
    protected $modelName = 'App\Models\CategoriaModel';
    protected $format = 'json';

    public function index()
    {
        return $this->genericResponse($this->model->findAll(), "", 200);
    }

    public function show($id = null)
    {
        if ($id == null) {
            return $this->genericResponse(null, "ID no encontrado", 500);
        }

        $categoria = $this->model->find($id);

        if (!$categoria) {
            return $this->genericResponse(null, "No existe", 500);
        }
        return $this->genericResponse($categoria, "", 200);
    }

    private function genericResponse($data, $msj, $code)
    {
        if ($code == 200) {
            return $this->respond([
                "data" => $data,
                "code" => $code
            ]);
        } else {
            return $this->respond([
                "msj" => $msj,
                "code" => $code
            ]);
        }
    }

    public function create()
    {
        $categoriamodel = new CategoriaModel();
        if($this->validate('categorias'))
        {
            $id = $categoriamodel->insert([
                'titulo' => $this->request->getPost('titulo')
            ]);
            return $this->genericResponse($this->model->find($id),null,200);
        }
        
        $validation = \Config\Services::validation();
        return $this->genericResponse(null,$validation->getErrors(),500);
        
    }


    public function update($id = null)
    {
        $categoriamodel = new CategoriaModel();

        $categoria= $this->model->find($id);

        if(!$categoria){
            return $this->genericResponse(null,"No existe",500);

        }


        $data = $this->request->getRawInput();

        if($this->validate('categorias')){
            $update = $categoriamodel->update($id,[
                'titulo' => $data['titulo']
            ]);

            if($update)
            {
                return $this->genericResponse($this->model->find($id),"",200);
            }else{
                $validation = \config\Services::Validation();
                return $this->genericResponse(null, "fallo al actualizar",500);
            }
        }else{
            $validation = \config\Services::Validation();
            return $this->genericResponse(null, $validation->getErrors(),500);
        }


        if($this->validate('categorias'))
        {
            $id = $categoriamodel->insert([
                'titulo' => $this->request->getPost('titulo')
            ]);
        }
        
        $validation = \Config\Services::validation();
        return $this->genericResponse(null,$validation->getErrors(),500);
        
    }


    public function delete($id = null)
    {


        $this->model->delete($id);
        return $this->genericResponse("categoria $id eliminado","",200);



    }

}
?>
