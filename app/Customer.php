<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded=[];
    public function Posts(){
        return $this->hasMany(post::class);
    }
}
