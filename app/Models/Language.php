<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Nnjeim\World\Models\Traits\WorldConnection;

class Language extends Model
{
    use HasFactory;

	protected $fillable = [
		'code',
		'name',
		'name_native',
		'dir',
	];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

}
