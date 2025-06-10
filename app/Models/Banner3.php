<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner3 extends Model
{
    protected $table = 'banner3';

    protected $fillable = ['banner', 'message', 'description', 'img'];
}

