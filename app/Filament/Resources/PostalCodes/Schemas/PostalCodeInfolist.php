<?php

namespace App\Filament\Resources\PostalCodes\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class PostalCodeInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('country_id')
                    ->numeric(),
                TextEntry::make('state_id')
                    ->numeric(),
                TextEntry::make('city_id')
                    ->numeric(),
                TextEntry::make('area'),
                TextEntry::make('postal_code'),
                TextEntry::make('latitude'),
                TextEntry::make('longitude'),
                TextEntry::make('status'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
