<?php

namespace YourApplicationName;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class detalle_claves extends Model
{
    
    protected $primaryKey = 'iddc';  
    protected $fillable=['iddc','idlu','id_niv','idh','idprof'];
    protected $date=['deleted_at'];
}
