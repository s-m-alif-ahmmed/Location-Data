<?php

namespace App\Filament\Resources\Countries\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class CountryInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('iso2'),
                TextEntry::make('iso3'),
                TextEntry::make('name'),
                TextEntry::make('capital'),
                TextEntry::make('numeric_code'),
                TextEntry::make('phone_code'),
                TextEntry::make('region'),
                TextEntry::make('subregion'),
                TextEntry::make('tld'),
                TextEntry::make('native'),
                TextEntry::make('latitude'),
                TextEntry::make('longitude'),
                TextEntry::make('emoji'),
                TextEntry::make('emojiU'),
                TextEntry::make('status'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
