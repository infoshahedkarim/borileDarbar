<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NextOrosh extends Model
{
    protected $table = 'next_orosh';

    protected $fillable = [
        'date', 'img', 'start_time', 'end_time', 'location', 'header', 'description'
    ];
}
