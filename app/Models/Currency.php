<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Currency extends Model
{
    use HasFactory;

	protected $fillable = [
		'country_id',
		'name',
		'name_plural',
		'code',
		'decimal_digits',
		'symbol',
		'symbol_native',
		'symbol_first',
		'decimal_mark',
		'thousands_separator',
		'rounding',
	];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected function casts(): array
    {
        return [
            'country_id' => 'int',
            'precision' => 'int',
            'symbol_first' => 'bool',
        ];
    }

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

}
