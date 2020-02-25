<?php

namespace YourApplicationName;
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class calificaciones extends Model
{
    protected $table = 'calificaciones';
    protected $primaryKey = 'idcal';  
    protected $fillable=['idcal','iddc','calificacion','evaluacion'];
    protected $date=['deleted_at'];
}
