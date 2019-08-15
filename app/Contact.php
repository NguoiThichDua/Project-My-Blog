<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //Table name
    protected $table = 'contact';
    //Primary key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;

    //Mối quan hệ giữa các Model
    public function user(){
        return $this->belongsTo('App\User');
    }
}
