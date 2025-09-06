<?php

namespace App\Filament\Resources\PostalCodes\Pages;

use App\Filament\Resources\PostalCodes\PostalCodeResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPostalCodes extends ListRecords
{
    protected static string $resource = PostalCodeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
