<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectChat extends Model
{

    public function staff(){

        return $this->belongsTo('App\User','user_id','id');
    }

}
