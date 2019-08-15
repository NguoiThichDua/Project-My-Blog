<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //table name
    protected $table = 'news';

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function comment(){
        return $this->hasMany('App\CommentNews');
    }
}
