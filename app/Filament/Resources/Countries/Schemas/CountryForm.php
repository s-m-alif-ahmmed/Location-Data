<?php

namespace App\Filament\Resources\Countries\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CountryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('iso2'),
                TextInput::make('iso3'),
                TextInput::make('name'),
                TextInput::make('capital'),
                TextInput::make('numeric_code'),
                TextInput::make('phone_code')
                    ->tel(),
                TextInput::make('region'),
                TextInput::make('subregion'),
                TextInput::make('tld'),
                TextInput::make('native'),
                TextInput::make('latitude'),
                TextInput::make('longitude'),
                TextInput::make('emoji'),
                TextInput::make('emojiU'),
                Select::make('status')
                    ->options(['Active' => 'Active', 'Deactivate' => 'Deactivate'])
                    ->default('Active')
                    ->required(),
            ]);
    }
}
