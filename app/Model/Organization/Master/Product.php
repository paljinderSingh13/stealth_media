<?php

namespace App\Model\Organization\Master;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = [
      'prod_name', 'category', 'brand', 'supplier', 'model', 'color','price', 'sales', 'stock', 'imei','created_by'
  ];

  public function stock(){
    return $this->belongsTo('App\Model\Organization\Master\Stock');
  }
}
