<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    use HasFactory;

    protected $fillable = [       // กำหนดฟิลด์ที่สามารถถูกกรอกข้อมูลได้
        'title',
        'artist',
        'album',
        'genre',
        'release_year',
        'track_number',
        'label',
        'duration',
        'composer',
        'producer',
        'explicit_content',
        'language',
        'cover_image',
        'file_path',
        'plays',
    ];
}
