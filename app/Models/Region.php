<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    //la tabla a conectarse
    protected $table ="regions";
    //la clave priamaria de la tabla
    protected $primaryKey="region_id";    
    //omitir campos de auditoria
    public $timestamps=false;
    
    use HasFactory;

    //1 to M: Region & Country 
    //Relationship

    public function countries(){
        return $this->hasMany(Country::class,'region_id');
    }
}
