<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DataRequest extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = [
        'project_id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'affiliation',
        'role',
        'message',
        'status',
        'company_name',
        'job_title',
    ];
}
