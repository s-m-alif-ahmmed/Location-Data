<?php

namespace App\Filament\Resources\Cities\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CityForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('country_id')
                    ->relationship('country', 'name')
                    ->required(),
                Select::make('state_id')
                    ->relationship('state', 'name')
                    ->required(),
                TextInput::make('name'),
                TextInput::make('country_code'),
                TextInput::make('latitude'),
                TextInput::make('longitude'),
                TextInput::make('wikiDataId'),
                Select::make('status')
                    ->options(['Active' => 'Active', 'Deactivate' => 'Deactivate'])
                    ->default('Active')
                    ->required(),
            ]);
    }
}
