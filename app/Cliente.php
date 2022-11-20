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
    public function getGetNombreAttribute(){
    		return strtoupper($this->nombre);
    }
    public function getGetApellidoAttribute(){
    		return strtoupper($this->apellido);
    }
    
    public function setNombreAttribute($value){
            $this->attributes['nombre']=strtolower($value);
    } // con esto se logra guardar en minuscula -> solo debes poner la funcion aqui no la necesitas llamar 
    public function setApellidoAttribute($value){
            $this->attributes['apellido']=strtolower($value);
    } 
}
