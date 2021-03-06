<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Museum extends Model
{
    public function category() {
        return $this->belongsTo('App\Category');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function likeMuseum() {
        return $this->hasMany('App\likeMuseum');
    }

    protected $fillable = [
        'post_img'
    ];

}
