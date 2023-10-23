<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RealEstates extends Model
{
    use HasFactory;
    protected $table = 'real_estates';
    protected $fillable = [
        'title',
        'city',
        'address',
        'bedrooms',
        'bathrooms',
        'price',
    ];
}
