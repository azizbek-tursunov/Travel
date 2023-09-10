<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Destination extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_uz',
        'name_ru',
        'name_en',
        'description_uz',
        'description_ru',
        'description_en',
        'image_uz',
        'image_ru',
        'image_en',
        'banner_image'
    ];

    public function tours()
    {
        return $this->belongsToMany(Tour::class, 'destination_tours');
    }

    public function shortDescription()
    {
        return Str::words(strip_tags($this->{'description_'.app()->getLocale()}), 20);
    }
}
