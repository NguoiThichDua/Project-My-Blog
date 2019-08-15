<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentForum extends Model
{
    //table name
    protected $table = 'comment_forum';
     //Primary key
    public $primaryKey = 'id';
     //Timestamps
    public $timestamps = true;

    public function forum(){
        return $this->belongsTo('App\Forum');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
