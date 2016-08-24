<?php

namespace LawyerSoft;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetCasoImplicado extends Model
{
    use SoftDeletes;

    protected $table = "det_caso_implicados";
    protected $primaryKey = "idDetCasoImplicado"; //se agrega si el nombre de pk no es id
    protected $fillable = ['idCaso','idImplicado']; 
    protected $dates = ['deleted_at'];   //para deshabilitar el registro
}
