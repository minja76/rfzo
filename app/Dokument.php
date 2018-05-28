<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokument extends Model
{
    //

    public function radnik(){
        
       return $this->belongsTo('App\Radnik', 'id_radnika');
         }
       
}
