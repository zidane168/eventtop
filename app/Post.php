<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "Posts";	

    // một Posts thuộc về một Kinds
    public function kinds()
    {
    	return $this->belongsTo('App\Kind', 'KindId', 'Id');
    }
}
