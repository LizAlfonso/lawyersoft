<?php

namespace LawyerSoft;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Asistencia extends Model
{
    use SoftDeletes;

    protected $table = "asistencias";
    protected $primaryKey = "idAsistencia"; //se agrega si el nombre de pk no es id
    protected $fillable = ['numeroAutorizacion','fechaAsignacion','observaciones','gravedad','idQuienAsigna'];
    protected $dates = ['deleted_at'];   //para deshabilitar el registro
}
