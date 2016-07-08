<?php

namespace LawyerSoft;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = "rols";
    protected $primaryKey = "idRol"; //se agrega si el nombre de pk no es id
    protected $fillable = ['descripcion'];

    // //Un rol tiene muchos usuarios
     public function usuarios()
    {
        return $this->hasMany('LawyerSoft\User','id','idRol');
    } 
}
