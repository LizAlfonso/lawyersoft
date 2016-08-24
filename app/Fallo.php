<?php

namespace LawyerSoft;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fallo extends Model
{
    use SoftDeletes;

    protected $table = "fallos";
    protected $primaryKey = "idFallo"; //se agrega si el nombre de pk no es id
    protected $fillable = ['fecha','expedienteResolucion','idAudiencia','idResultado'];
    protected $dates = ['deleted_at'];   //para deshabilitar el registro
}
