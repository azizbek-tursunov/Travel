<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_uz',
        'image_uz',
        'title_ru',
        'image_ru',
        'title_en',
        'image_en',
    ];
}
