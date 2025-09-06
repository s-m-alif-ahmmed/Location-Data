<?php

namespace App\Filament\Resources\PostalCodes\Pages;

use App\Filament\Resources\PostalCodes\PostalCodeResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditPostalCode extends EditRecord
{
    protected static string $resource = PostalCodeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
