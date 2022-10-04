<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citie extends Model
{
    use HasFactory;
    protected $table = 'cities';
    //Indica que la clave primaria no es autoincrement
    //protected $keyType = 'string';
    protected $primaryKey = 'city_id';
    //Destactiva el create_at y el updated_at
    //public $incrementing = false;
    public $timestamps = false;
    //const CREATED_AT = 'creation_date';
    //const UPDATED_AT = 'last_update';
    //Para conectarse a otra bd con un modelo
    //protected $connection = 'connection-name';.
}
