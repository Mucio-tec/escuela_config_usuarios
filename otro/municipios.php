<?php

namespace YourApplicationName;
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class municipios extends Model
{
    
    protected $primaryKey = 'idmun';  
    protected $fillable=['idmun','municipio'];
    protected $date=['deleted_at'];
}
