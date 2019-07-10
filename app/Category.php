<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    const CREATED_AT = null;
    const UPDATED_AT = null;

    public function posts(){
        
        return $this->hasMany('App\Post'); //one to many relationship
    }
}
