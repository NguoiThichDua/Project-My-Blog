<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentNews extends Model
{
    protected $table = 'comment_news';

    public function user(){
        return $this->belongsTo('App\User');
    }
}
