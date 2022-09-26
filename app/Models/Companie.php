<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companie extends Model
{
    use HasFactory;
    protected $table = 'Companies';
    protected $primaryKey = 'companies_id';
    public $timestamps = false;
}
