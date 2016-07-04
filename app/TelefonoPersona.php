<?php

namespace LawyerSoft;

use Illuminate\Database\Eloquent\Model;

class TelefonoPersona extends Model
{
    protected $table = "tefono_personas";
    protected $primaryKey = "idTelefonoPersona";
    protected $fillable = ['numero'];
}
