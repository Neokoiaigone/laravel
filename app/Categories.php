<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable = [
        'title', 'images' ];


    public function article()
    {
        return $this->hasMany('App\Article');
    }
}