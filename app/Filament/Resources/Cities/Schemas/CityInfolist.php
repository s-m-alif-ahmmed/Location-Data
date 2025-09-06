<?php

namespace App\Filament\Resources\Cities\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class CityInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('country.name')
                    ->numeric(),
                TextEntry::make('state.name')
                    ->numeric(),
                TextEntry::make('name'),
                TextEntry::make('country_code'),
                TextEntry::make('latitude'),
                TextEntry::make('longitude'),
                TextEntry::make('wikiDataId'),
                TextEntry::make('status'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
