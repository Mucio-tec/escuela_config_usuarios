<?php

namespace documentoscontroller;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class grupos extends Model
{
    use SoftDeletes;
    protected $primaryKey = 'id_grupo';  
    protected $fillable=['id_grupo','nombre',
	'id_categoria','activo'];
    protected $date=['deleted_at'];
}