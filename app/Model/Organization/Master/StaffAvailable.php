<?php

namespace App\Model\Organization\Master;

use Illuminate\Database\Eloquent\Model;

class StaffAvailable extends Model
{
  protected  $fillable = ['staff_id', 'date', 'day', 'month', 'year', 'available', 'shift_start', 'shift_end'];

}
