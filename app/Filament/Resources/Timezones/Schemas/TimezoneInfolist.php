<?php

namespace App\Filament\Resources\Timezones\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class TimezoneInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('country.name')
                    ->numeric(),
                TextEntry::make('name'),
                TextEntry::make('gmtOffset'),
                TextEntry::make('gmtOffsetName'),
                TextEntry::make('abbreviation'),
                TextEntry::make('tzName'),
                TextEntry::make('status'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
