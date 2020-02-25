<?php

namespace YourApplicationName;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class clave_alumnos extends Model
{
    
    protected $primaryKey = 'idca';  
    protected $fillable=['idca','iddc','idalum'];
    protected $date=['deleted_at'];
}
