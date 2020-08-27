<?php

namespace App\Model\Master;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [ 'name', 'address', 'address_2', 'country', 'state', 'city', 'zip', 'status', 'created_by'];
}
