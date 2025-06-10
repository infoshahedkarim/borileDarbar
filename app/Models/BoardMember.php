<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BoardMember extends Model
{
    protected $table = 'board_members';

    protected $fillable = ['img', 'name', 'designation', 'phone', 'fb', 'twitter'];
}
