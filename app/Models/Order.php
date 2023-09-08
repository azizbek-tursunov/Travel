<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'tour_id',
        'addition',
        'is_contacted',
    ];

    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }
}
