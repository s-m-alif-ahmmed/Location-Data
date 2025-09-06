<?php

namespace App\Filament\Resources\PostalCodes\Pages;

use App\Filament\Resources\PostalCodes\PostalCodeResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPostalCode extends ViewRecord
{
    protected static string $resource = PostalCodeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
