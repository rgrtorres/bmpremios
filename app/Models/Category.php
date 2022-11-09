<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "poll_category";
    protected $fillable = ['name_poll_category', 'status_poll_category'];
}
