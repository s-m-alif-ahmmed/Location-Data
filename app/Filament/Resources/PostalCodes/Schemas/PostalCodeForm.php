<?php

namespace App\Filament\Resources\PostalCodes\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PostalCodeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('country_id')
                    ->required()
                    ->numeric(),
                TextInput::make('state_id')
                    ->required()
                    ->numeric(),
                TextInput::make('city_id')
                    ->required()
                    ->numeric(),
                TextInput::make('area'),
                TextInput::make('postal_code'),
                TextInput::make('latitude'),
                TextInput::make('longitude'),
                Select::make('status')
                    ->options(['Active' => 'Active', 'Deactivate' => 'Deactivate'])
                    ->default('Active')
                    ->required(),
            ]);
    }
}
