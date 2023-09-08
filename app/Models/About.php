<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_uz',
        'description_uz',
        'title_ru',
        'description_ru',
        'title_en',
        'description_en',
        'title2_uz',
        'description2_uz',
        'title2_ru',
        'description2_ru',
        'title2_en',
        'description2_en',
        'banner_image',
        'image',
    ];

}
