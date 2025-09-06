<?php

namespace App\Filament\Resources\SystemSettings\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class SystemSettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title'),
                TextInput::make('email')
                    ->label('Email address')
                    ->email(),
                TextInput::make('number'),
                TextInput::make('system_name'),
                TextInput::make('address'),
                TextInput::make('copyright_text'),
                FileUpload::make('logo')
                    ->image()
                    ->visibility('public')
                    ->disk('public')
                    ->directory('uploads/images/favicon'),
                FileUpload::make('favicon')
                    ->image()
                    ->visibility('public')
                    ->disk('public')
                    ->directory('uploads/images/favicon'),
                RichEditor::make('description')
                    ->columnSpanFull(),
            ]);
    }
}
