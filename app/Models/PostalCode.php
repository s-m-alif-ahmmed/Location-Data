<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostalCode extends Model
{
    use HasFactory;

    protected $fillable = [
        'country_id',
        'state_id',
        'city_id',
        'area',
        'postal_code',
        'latitude',
        'longitude',
        'status',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
