<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_uz',
        'description_uz',
        'direction_uz',
        'image_uz',
        'name_ru',
        'description_ru',
        'direction_ru',
        'image_ru',
        'name_en',
        'description_en',
        'direction_en',
        'image_en',
        'price',
        'banner_image'
    ];

    public function destinations()
    {
        return $this->belongsToMany(Destination::class, 'destination_tours');
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
