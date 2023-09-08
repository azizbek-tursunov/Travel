<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;

    protected $fillable = [
        'about_uz',
        'contact_uz',
        'about_ru',
        'contact_ru',
        'about_en',
        'contact_en',
        'social',
    ];

    protected $casts = [
        'social' => 'array',
    ];
}
