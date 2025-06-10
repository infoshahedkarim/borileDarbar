<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'banner'; // important, not plural

    protected $fillable = [
        'banner1', 'message1', 'description1', 'img1',
        'banner2', 'message2', 'description2', 'img2',
        'banner3', 'message3', 'description3', 'img3',
    ];
}
