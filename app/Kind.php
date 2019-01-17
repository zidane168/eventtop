<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kind extends Model
{
    protected $table = "Kinds";	

    // một kinds có nhiều posts
    public function posts()
    {
		return $this->hasMany('App\post', 'kindId', 'Id');
    }  
}
