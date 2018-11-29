<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    public function users() {
        return $this->hasMany('App\User');
    }

    public function books() {
        return $this->hasMany('App\Book');
    }
}
