<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    protected $table = 'posts';
    protected $fillable = [
        'post_title', 'description', 'id'
    ];
}
