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

    //Many to Many Country-Language
    //relationship

    public function languages(){
        //BelongsToMany Method;
        //Related Model
        //pivot table(intermediate table)
        //Foreign Key Current Model
        //Foreign Key of related model
        return $this->belongsToMany(Language::class,'country_languages','country_id','language_id');
    }

    //M to 1 Country-Region
    //Relationship
    public function regions(){
        //BelongTo method 
        //Related Models
        //Foreign Key related model in current model
        
        return $this->belongsTo(Region::class,'region_id','');
    } 
}
