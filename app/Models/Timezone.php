<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Nnjeim\World\Models\Traits\WorldConnection;
use Nnjeim\World\Models\Traits\TimezoneRelations;

use Illuminate\Database\Eloquent\Model;

class Timezone extends Model
{
    use HasFactory;

	protected $fillable = [
		'country_id',
		'name',
		'gmtOffset',
		'gmtOffsetName',
		'abbreviation',
		'tzName',
	];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected function casts(): array
    {
        return [
            'country_id' => 'int',
        ];
    }

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

}
