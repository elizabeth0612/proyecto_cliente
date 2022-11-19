<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cliente;

class Categoria extends Model
{
         protected $primaryKey = 'id_categoria';

         public function clientes()
    {
        return $this->hasmany(Cliente::class, 'id_categoria', 'id_categoria');
    }
}
