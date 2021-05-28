<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'user_name', 'first_name', 'last_name', 'gender', 'user_type', 'contact', 'alternate', 'store_affiliation', 'created_by'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role(){
      return $this->belongsTo('App\Model\Organization\Master\Role','user_type','id');
    }
    public function store(){
      return $this->belongsTo('App\Model\Organization\Master\Store','store_affiliation','id');
    }
    public function availability(){
      return $this->hasMany('App\Model\Organization\Master\StaffAvailable','staff_id','id');
    }




}
