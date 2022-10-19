<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TeamMembers extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'first_name',
        'last_name',
        'position',
        'about',
        'email',
        'image',
        'linkedin',
        'twitter',
        'facebook',
    ];
}
