<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    //table name
    protected $table = 'forum';
     //Primary key
    public $primaryKey = 'id';
     //Timestamps
    public $timestamps = true;

     //Mối quan hệ giữa các Model
    public function user(){
        return $this->belongsTo('App\User');
    }
}
