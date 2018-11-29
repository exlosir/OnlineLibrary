<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function Genre() {
        return $this->hasOne('App\Genre', 'id', 'genre_id');
    }

    public function Author() {
        return $this->hasOne('App\Author', 'id', 'author_id');
    }

    public function favorite() {
        return $this->belongsToMany('App\User', 'favorites', 'book_id', 'user_id');
    }
}
