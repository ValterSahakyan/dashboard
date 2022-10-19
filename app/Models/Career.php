<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Career extends Model
{
    use HasFactory;

    use SoftDeletes;
    use HasFactory;

    protected $fillable = [
        'title',
        'deadline',
        'location',
        'level',
        'term',
        'description',
        'responsibilities',
        'qualifications',
        'apply',
    ];
}
