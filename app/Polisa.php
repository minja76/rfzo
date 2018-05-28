<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Polisa extends Model
{
    //
    protected $table = 'polise';


    public function radnik(){
        
       return $this->belongsTo('App\Radnik', 'id_radnika');
         }
       


}
