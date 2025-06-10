<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner2 extends Model
{
    protected $table = 'banner2';

    protected $fillable = ['banner', 'message', 'description', 'img'];
}

