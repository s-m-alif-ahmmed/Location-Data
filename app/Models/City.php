<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

	protected $fillable = [
        'country_id',
        'state_id',
        'name',
        'country_code',
        'latitude',
        'longitude',
        'wikiDataId',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected function casts(): array
    {
        return [
            'country_id' => 'int',
            'state_id' => 'int',
        ];
    }

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class);
    }
}
