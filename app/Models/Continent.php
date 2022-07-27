<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    //la tabla a conectarse
    protected $table ="continents";
    //la clave priamaria de la tabla
    protected $primaryKey="continent_id";    
    //omitir campos de auditoria
    public $timestamps=false;
    use HasFactory; 

}
