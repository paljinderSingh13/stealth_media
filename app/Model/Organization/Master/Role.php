<?php

namespace App\Model\Organization\Master;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function staff(){
      return $this->belongsTo('App\Model\User');
    }
}
