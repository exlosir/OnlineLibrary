<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public $timestamps = false; // отключение меток времени создан и обновлен

    public function book(){
        return $this->belongsTo('App\Book', 'genre_id', 'id');
    }
}
