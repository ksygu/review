<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $guarded = ['id'];

    protected $table = 'review';

    public function shop() {
        return $this->belongsTo(Shop::class);
    }
}
