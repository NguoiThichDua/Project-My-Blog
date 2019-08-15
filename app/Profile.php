<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
       //table name
    protected $table = 'users';
    //Primary key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;
    
    public function forum(){
        return $this->belongsTo('App\Forum');
    }
}
 