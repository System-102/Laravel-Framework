<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'gif_image',
        'video_url',
        'steps',
        'color',
        'benefits',
        'duration',
        'level',
        'target_muscles',
        'extra_info',
    ];
}
