<?php

namespace LawyerSoft;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Caso extends Model
{
    use SoftDeletes;

    protected $table = "casos";
    protected $primaryKey = "idCaso"; //se agrega si el nombre de pk no es id
    protected $fillable = ['fechaAccidente','idAsistencia','idVehiculo'];
    protected $dates = ['deleted_at'];   //para deshabilitar el registro
}
