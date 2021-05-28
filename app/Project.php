<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['name', 'client_name', 'client_phone', 'client_email', 'client_address', 'website_url', 'drive_link', 'website_info', 'project_status', 'test_url', 'admin_panel_url', 'user_name', 'password', 'hosted_by', 'hosted_on', 'domain_register', 'note', 'sale_id','start_date', 'cost','monthly_maintenance','seo', 'technology',  'project_testing', 'google_review',  'email', 'email_password','additional_information'];

    public function sale(){

        return $this->belongsTo('App\User','sale_id','id');
    }



}
