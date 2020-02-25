<?php

namespace YourApplicationName;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class pagos extends Model
{
   
    protected $primaryKey = 'idp';  
    protected $fillable=['idp','idalum','costo','Folio','Fecha'];
    protected $date=['deleted_at'];
}
