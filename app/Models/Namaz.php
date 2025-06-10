<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Namaz extends Model
{
    protected $table = 'namaz';

    protected $fillable = [
        'fajr', 'zuhr', 'asr', 'magrib', 'isha', 'jummah'
    ];
}
