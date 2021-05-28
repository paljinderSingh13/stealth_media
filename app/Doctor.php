<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    public function slot(){
        return $this->hasMany("App\DoctorSlot");
    }
}
