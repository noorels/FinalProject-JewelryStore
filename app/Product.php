<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function Category(){
    return $this->belongsTo('App\Category');
}
    protected $fillable = ['Image','Title','Price'];
}
