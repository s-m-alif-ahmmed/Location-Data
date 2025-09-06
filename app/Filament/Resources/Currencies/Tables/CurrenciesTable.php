<?php

namespace App\Filament\Resources\Currencies\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CurrenciesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('country.name')
                    ->numeric()
                    ->sortable()
                    ->searchable(),
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('name_plural')
                    ->searchable(),
                TextColumn::make('code')
                    ->searchable(),
                TextColumn::make('decimal_digits')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('symbol')
                    ->searchable(),
                TextColumn::make('symbol_native')
                    ->searchable(),
                TextColumn::make('symbol_first')
                    ->numeric()
                    ->sortable()
                    ->searchable(),
                TextColumn::make('decimal_mark')
                    ->searchable(),
                TextColumn::make('thousands_separator')
                    ->searchable(),
                TextColumn::make('rounding')
                    ->numeric()
                    ->sortable()
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
