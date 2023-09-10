<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_uz',
        'description_uz',
        'name_ru',
        'description_ru',
        'name_en',
        'description_en',
        'image',
        'link',
        'banner_image'
    ];

    public function shortDescription()
    {
        return Str::words(strip_tags($this->{'description_'.app()->getLocale()}), 20);
    }
}
