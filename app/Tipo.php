<?php

namespace LawyerSoft;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tipo extends Model
{
    use SoftDeletes;

    protected $table = "tipos";
    protected $primaryKey = "idTipo"; //se agrega si el nombre de pk no es id
    protected $fillable = ['tipo'];
    protected $dates = ['deleted_at'];   //para deshabilitar el registro
}
