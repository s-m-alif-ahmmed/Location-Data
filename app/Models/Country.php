<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'iso2',
        'name',
        'status',
        'capital',
        'numeric_code',
        'phone_code',
        'iso3',
        'region',
        'subregion',
        'tld',
        'native',
        'latitude',
        'longitude',
        'emoji',
        'emojiU',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected function casts(): array
    {
        return [
            'status' => 'int',
        ];
    }

    public function states(): HasMany
    {
        return $this->hasMany(State::class, 'country_id', 'id');
    }

    public function cities(): HasMany
    {
        return $this->hasMany(City::class, 'country_id', 'id');
    }

    public function timezones(): HasMany
    {
        return $this->hasMany(Timezone::class, 'country_id', 'id');
    }

    public function currency(): HasOne
    {
        return $this->hasOne(Currency::class, 'country_id', 'id');
    }

}
