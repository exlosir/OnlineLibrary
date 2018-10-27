<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role_user extends Model
{
    public function Role() {
        return $this->hasOne('App\role','id','role_id');
    }

    public function User() {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
}
