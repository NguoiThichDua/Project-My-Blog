<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentCoding extends Model
{
    protected $table = 'comment_coding';

    public function user(){
        return $this->belongsTo('App\User');
    }
}
