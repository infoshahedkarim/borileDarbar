<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebInfo extends Model
{
    use HasFactory;

    protected $table = 'web_info';

    protected $fillable = [
        'facebook',
        'twitter',
        'linkedin',
        'number',
        'location',
        'email',
        'info',
        'logo',
    ];
}
