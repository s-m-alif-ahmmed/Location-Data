<?php

namespace App\Filament\Resources\Timezones;

use App\Filament\Resources\Timezones\Pages\CreateTimezone;
use App\Filament\Resources\Timezones\Pages\EditTimezone;
use App\Filament\Resources\Timezones\Pages\ListTimezones;
use App\Filament\Resources\Timezones\Pages\ViewTimezone;
use App\Filament\Resources\Timezones\Schemas\TimezoneForm;
use App\Filament\Resources\Timezones\Schemas\TimezoneInfolist;
use App\Filament\Resources\Timezones\Tables\TimezonesTable;
use App\Models\Timezone;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TimezoneResource extends Resource
{
    protected static ?string $model = Timezone::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Timezones';

    public static function form(Schema $schema): Schema
    {
        return TimezoneForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return TimezoneInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TimezonesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListTimezones::route('/'),
            'create' => CreateTimezone::route('/create'),
            'view' => ViewTimezone::route('/{record}'),
            'edit' => EditTimezone::route('/{record}/edit'),
        ];
    }
}
