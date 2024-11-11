<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Happening extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'banner_image', 'images', 'short_description', 'description'
    ];

    protected $casts = [
        'images' => 'array',  // Cast the images column to an array
    ];
}
