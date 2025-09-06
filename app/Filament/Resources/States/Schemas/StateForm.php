<?php

namespace App\Filament\Resources\States\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class StateForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('country_id')
                    ->relationship('country', 'name')
                    ->required(),
                TextInput::make('name'),
                TextInput::make('country_code'),
                TextInput::make('state_code'),
                TextInput::make('type'),
                TextInput::make('latitude'),
                TextInput::make('longitude'),
                Select::make('status')
                    ->options(['Active' => 'Active', 'Deactivate' => 'Deactivate'])
                    ->default('Active')
                    ->required(),
            ]);
    }
}
