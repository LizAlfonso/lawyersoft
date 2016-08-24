<?php

namespace LawyerSoft;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recobro extends Model
{
    use SoftDeletes;

    protected $table = "recobros";
    protected $primaryKey = "idRecobro"; //se agrega si el nombre de pk no es id
    protected $fillable = ['valorDeducible','valorCancelado','fechaEnvio','porcentajeCancelado','resultado','observaciones','idFallo','idAseguradoraTercero'];
    protected $dates = ['deleted_at'];   //para deshabilitar el registro
}
