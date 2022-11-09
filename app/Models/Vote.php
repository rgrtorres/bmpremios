<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $table = "poll_vote";
    protected $fillable = ['id_poll_category', 'id_poll_nominee'];
}
