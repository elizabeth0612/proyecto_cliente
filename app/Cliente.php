<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categoria;

class Cliente extends Model
{
     protected $primaryKey = 'id_cliente';
     protected $fillable = ['nombre','apellido','telefono','dni'];

     
    public function categoria()
    {
        return $this->hasOne(Categoria::class, 'id_categoria', 'id_categoria');
    }
}
