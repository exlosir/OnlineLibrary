<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    public function Role_user(){
        return $this->belongsTo('App\role_user', 'role_id', 'id');
    }
}
