<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $table = 'shop';


    public  function review() {
        return $this->hasOne(Review::class);
    }
}
