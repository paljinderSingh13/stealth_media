<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['name', 'client_name', 'client_phone', 'client_email', 'client_address', 'website_url', 'drive_link', 'website_info', 'project_status', 'test_url', 'admin_panel_url', 'user_name', 'password', 'hosted_by', 'hosted_on', 'domain_register', 'note', 'start_date', 'cost', 'technology'];
}
