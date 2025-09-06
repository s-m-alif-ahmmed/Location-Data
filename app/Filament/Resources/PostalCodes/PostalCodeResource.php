<?php

namespace App\Filament\Resources\PostalCodes;

use App\Filament\Resources\PostalCodes\Pages\CreatePostalCode;
use App\Filament\Resources\PostalCodes\Pages\EditPostalCode;
use App\Filament\Resources\PostalCodes\Pages\ListPostalCodes;
use App\Filament\Resources\PostalCodes\Pages\ViewPostalCode;
use App\Filament\Resources\PostalCodes\Schemas\PostalCodeForm;
use App\Filament\Resources\PostalCodes\Schemas\PostalCodeInfolist;
use App\Filament\Resources\PostalCodes\Tables\PostalCodesTable;
use App\Models\PostalCode;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PostalCodeResource extends Resource
{
    protected static ?string $model = PostalCode::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'postal_codes';

    public static function form(Schema $schema): Schema
    {
        return PostalCodeForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PostalCodeInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PostalCodesTable::configure($table);
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
            'index' => ListPostalCodes::route('/'),
            'create' => CreatePostalCode::route('/create'),
            'view' => ViewPostalCode::route('/{record}'),
            'edit' => EditPostalCode::route('/{record}/edit'),
        ];
    }
}
