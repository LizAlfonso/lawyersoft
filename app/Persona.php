<?php

namespace LawyerSoft;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Persona extends Model
{
    use SoftDeletes;

    protected $table = "personas";
    protected $primaryKey = "idPersona"; //se agrega si el nombre de pk no es id
    protected $fillable = ['nombres','apellidos','identificacion','fechaNacimiento','idGenero'];
    protected $dates = ['deleted_at'];   //para deshabilitar el registro

}
