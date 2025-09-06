<?php

namespace App\Filament\Resources\States\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class StateInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('country.name')
                    ->numeric(),
                TextEntry::make('name'),
                TextEntry::make('country_code'),
                TextEntry::make('state_code'),
                TextEntry::make('type'),
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
