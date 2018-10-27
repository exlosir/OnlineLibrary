<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role_users extends Model
{
    public function role() {
        return $this->hasMany('App\role','id','role_id');
    }

    public function User() {
        return $this->hasMany('App\User', 'id', 'user_id');
    }
}
