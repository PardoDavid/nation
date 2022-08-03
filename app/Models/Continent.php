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

    //Relacion entre continente y sus regiones
    public function regiones(){
        //Parametros
        //Modelo a Relacionar
        //Clave Foranea del actual modelo en el modelo relacional Region
        return $this->hasMany(Region::class,'continent_id');
    }

}
