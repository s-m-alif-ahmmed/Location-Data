<?php

namespace App\Filament\Resources\Countries\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CountriesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('iso2')
                    ->searchable(),
                TextColumn::make('iso3')
                    ->searchable(),
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('capital')
                    ->searchable(),
                TextColumn::make('numeric_code')
                    ->searchable(),
                TextColumn::make('phone_code')
                    ->searchable(),
                TextColumn::make('region')
                    ->searchable(),
                TextColumn::make('subregion')
                    ->searchable(),
                TextColumn::make('tld')
                    ->searchable(),
                TextColumn::make('native')
                    ->searchable(),
                TextColumn::make('latitude')
                    ->searchable(),
                TextColumn::make('longitude')
                    ->searchable(),
                TextColumn::make('emoji')
                    ->searchable(),
                TextColumn::make('emojiU')
                    ->searchable(),
                TextColumn::make('status'),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
