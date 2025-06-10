<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner1 extends Model
{
    protected $table = 'banner1';

    protected $fillable = ['banner', 'message', 'description', 'img'];
}

