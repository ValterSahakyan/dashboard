<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'title',
        'sub_title',
        'collaboration_id',
        'image',
        'data_file',
        'description',
        'disease_contagion',
        'disease_mortality',
        'existing_drugs',
        'request_title',
        'request_sub_title',
    ];

    /**
     * Get the model that owns the collaboration.
     */
    public function collaboration()
    {
        return $this->belongsTo('App\Models\Collaboration', 'collaboration_id');
    }
}
