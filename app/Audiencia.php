<?php

namespace LawyerSoft;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Audiencia extends Model
{
    use SoftDeletes;

    protected $table = "audiencias";
    protected $primaryKey = "idAudiencia"; //se agrega si el nombre de pk no es id
    protected $fillable = ['fecha','hora','observaciones','idAbogado','idCaso','idEstadoAudiencia','idLugar'];
    protected $dates = ['deleted_at'];   //para deshabilitar el registro
}
