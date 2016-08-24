<?php

namespace LawyerSoft;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AseguradoraTercero extends Model
{
    use SoftDeletes;

    protected $table = "aseguradora_terceros";
    protected $primaryKey = "idAseguradoraTercero"; //se agrega si el nombre de pk no es id
    protected $fillable = ['nombre'];
    protected $dates = ['deleted_at'];   //para deshabilitar el registro
}
