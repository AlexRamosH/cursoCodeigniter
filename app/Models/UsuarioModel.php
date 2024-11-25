<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table            = 'usuarios';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
   // protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['usuario','email','contrasena'];

   public function contrasenaHash($contrasenaHash){
    return password_hash($contrasenaHash,PASSWORD_DEFAULT);
   }

   public function contrasenaVerificar($contrasenaPlano, $contrasenahash){
    return password_hash($contrasenaPlano,PASSWORD_DEFAULT);
   }
}