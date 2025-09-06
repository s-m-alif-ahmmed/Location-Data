<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                DateTimePicker::make('email_verified_at'),
                TextInput::make('password')
                    ->password()
                    ->required(),
                TextInput::make('provider_id'),
                Toggle::make('terms')
                    ->required(),
                Select::make('role')
                    ->options(['Admin' => 'Admin', 'User' => 'User'])
                    ->default('User')
                    ->required(),
                DateTimePicker::make('reset_password_token_exp'),
            ]);
    }
}
