<?php

namespace YourApplicationName;
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class horarios extends Model
{
    protected $table = 'horarios';
    protected $primaryKey = 'idh';  
    protected $fillable=['idh','horario','horas','activo'];
    protected $date=['deleted_at'];
}
