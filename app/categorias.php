<?php

namespace YourApplicationName;
namespace documentoscontroller;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class categorias extends Model
{
    protected $table = 'categorias';
    protected $primaryKey = 'id_categorias';  
    protected $fillable=['id_categorias','nombre_categoria','activo'];
    protected $date=['deleted_at'];
}
