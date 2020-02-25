<?php

namespace documentoscontroller;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class empresas extends Model
{
    use SoftDeletes;
    protected $primaryKey = 'idempresa';  
    protected $fillable=['idempresa','nombreempresa',
	'direccion','foto','encargado','telefono','id_categoria'
    ,'id_grupo','activo'];
    protected $date=['deleted_at'];
}
