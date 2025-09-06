<?php

namespace App\Filament\Resources\Currencies\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class CurrencyInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('country.name')
                    ->numeric(),
                TextEntry::make('name'),
                TextEntry::make('name_plural'),
                TextEntry::make('code'),
                TextEntry::make('decimal_digits')
                    ->numeric(),
                TextEntry::make('symbol'),
                TextEntry::make('symbol_native'),
                TextEntry::make('symbol_first')
                    ->numeric(),
                TextEntry::make('decimal_mark'),
                TextEntry::make('thousands_separator'),
                TextEntry::make('rounding')
                    ->numeric(),
                TextEntry::make('status'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
