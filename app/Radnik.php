<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Radnik extends Model
{
    //
    protected $table = 'radnici';

    public function polisas(){
        
       return $this->hasMany('App\Polisa', 'id_radnika');
         }

         public function dokuments(){
          
         return $this->hasMany('App\Dokument', 'id_radnika');
           }

}
