<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteConfiguration extends Model
{
    protected $table = "site_configuration";
    protected $fillable = ['award', 'editions', 'social_networks', 'creator', 'sponsors'];
}
