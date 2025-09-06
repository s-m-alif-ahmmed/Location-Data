<?php

namespace App\Filament\Resources\Currencies\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CurrencyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('country_id')
                    ->relationship('country', 'name')
                    ->required(),
                TextInput::make('name'),
                TextInput::make('name_plural'),
                TextInput::make('code'),
                TextInput::make('decimal_digits')
                    ->required()
                    ->numeric()
                    ->default(2),
                TextInput::make('symbol'),
                TextInput::make('symbol_native'),
                TextInput::make('symbol_first')
                    ->required()
                    ->numeric()
                    ->default(1),
                TextInput::make('decimal_mark')
                    ->required()
                    ->default('.'),
                TextInput::make('thousands_separator')
                    ->required()
                    ->default(','),
                TextInput::make('rounding')
                    ->required()
                    ->numeric()
                    ->default(0),
                Select::make('status')
                    ->options(['Active' => 'Active', 'Deactivate' => 'Deactivate'])
                    ->default('Active')
                    ->required(),
            ]);
    }
}
