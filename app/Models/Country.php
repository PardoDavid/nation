<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
     //la tabla a conectarse
     protected $table ="countries";
     //la clave priamaria de la tabla
     protected $primaryKey="country_id";    
     //omitir campos de auditoria
     public $timestamps=false;
    use HasFactory;
}
