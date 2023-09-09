<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
    use HasFactory;

    protected $fillable = [
        'banner',
        'about_uz',
        'about_text_uz',
        'about_ru',
        'about_text_ru',
        'about_en',
        'about_text_en',
        'image',
        'image2',
        'video_text_uz',
        'video_text_ru',
        'video_text_en',
        'video_background',
        'video_link',
        'CTa_text_uz',
        'CTa_text_ru',
        'CTa_text_en',
        'CTa_link',
    ];

    protected $casts = [
        'banner' => 'array',
    ];
}
