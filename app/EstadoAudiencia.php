<?php

namespace LawyerSoft;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EstadoAudiencia extends Model
{
    use SoftDeletes;

    protected $table = "estado_audiencias";
    protected $primaryKey = "idEstadoAudiencia"; //se agrega si el nombre de pk no es id
    protected $fillable = ['nombre'];
    protected $dates = ['deleted_at'];   //para deshabilitar el registro
}
