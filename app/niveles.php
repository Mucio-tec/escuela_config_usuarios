<?php

namespace YourApplicationName;
namespace documentoscontroller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class niveles extends Model
{
    protected $table = 'niveles';

    protected $primaryKey = 'id_niv';  
    protected $fillable=['id_niv','Nivel','activo'];
    protected $date=['deleted_at'];
}
