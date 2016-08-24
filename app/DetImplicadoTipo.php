<?php

namespace LawyerSoft;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetImplicadoTipo extends Model
{
	use SoftDeletes;

    protected $table = "det_implicado_tipos";
    protected $primaryKey = "idDetImplicadoTipo"; //se agrega si el nombre de pk no es id
    protected $fillable = ['idImplicado','idTipo']; 
    protected $dates = ['deleted_at'];   //para deshabilitar el registro
}
