<?php

namespace documentoscontroller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class modulos extends Model
{
    protected $table = 'modulos';

    protected $primaryKey = 'idmod';  
    protected $fillable=['idmod','modulo','activo'];
    protected $date=['deleted_at'];
}
