<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nominee extends Model
{
    protected $table = "poll_nominee";
    protected $fillable = ['name_poll_nominee', 'status_poll_nominee', 'id_category', 'picture_poll_nominee'];

    public function category()
    {
        return $this->hasOne(Category::class, 'id','id_category');
    }
}
