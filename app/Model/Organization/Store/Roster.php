<?php

namespace App\Model\Organization\Store;

use Illuminate\Database\Eloquent\Model;

class Roster extends Model
{
    protected $fillable = ['store_id', 'staff_id', 'date', 'day', 'month', 'year', 'available', 'shift_start', 'shift_end'];
}
