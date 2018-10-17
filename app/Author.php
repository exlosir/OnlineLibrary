<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public $timestamps = false; // отключение меток времени создан и обновлен

    public function book(){
        return $this->belongsTo('App\Book', 'author_id', 'id');
    }
}
