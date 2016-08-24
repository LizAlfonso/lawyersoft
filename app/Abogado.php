<?php

namespace LawyerSoft;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Abogado extends Model
{
    use SoftDeletes;

    protected $table = "abogados";
    protected $primaryKey = "idAbogado"; //se agrega si el nombre de pk no es id
    protected $fillable = ['fechaVinculacion','idPersona'];
    protected $dates = ['deleted_at'];   //para deshabilitar el registro
}
