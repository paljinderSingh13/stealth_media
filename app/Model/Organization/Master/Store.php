<?php

namespace App\Model\Organization\Master;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [ 'name', 'email', 'contact_number', 'alertnate_contact_number', 'unit_number', 'street_number', 'street_name', 'post_code', 'suburb_name', 'state', 'country', 'timezone', 'bsb', 'bank_account_number', 'bank_account_name', 'business_number', 'business_name', 'status', 'created_by'];

    public function staff(){
      return $this->belongsTo('App\Model\User');
    }
}
