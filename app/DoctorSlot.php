<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoctorSlot extends Model
{
    public function schedule(){
        return $this->hasMany("App\DoctorSchedule",'day');
    }
}
