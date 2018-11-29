<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{

    protected $primaryKey = null;
    public $incrementing = false;
    public $table = 'favorites';
    protected $fillable = ['book_id', 'user_id'];
    public $timestamps = false;
    // public function users() {
    //     return $this->hasMany('App\User');
    // }

    // public function books() {
    //     return $this->hasMany('App\Book');
    // }
}
