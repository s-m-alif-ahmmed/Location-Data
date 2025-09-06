<?php

namespace App\Filament\Resources\SystemSettings\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class SystemSettingInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('title'),
                TextEntry::make('email')
                    ->label('Email address'),
                TextEntry::make('number'),
                TextEntry::make('system_name'),
                TextEntry::make('address'),
                TextEntry::make('copyright_text'),
                FileUpload::make('logo'),
                FileUpload::make('favicon'),
            ]);
    }
}
