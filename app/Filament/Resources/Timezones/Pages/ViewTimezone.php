<?php

namespace App\Filament\Resources\Timezones\Pages;

use App\Filament\Resources\Timezones\TimezoneResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewTimezone extends ViewRecord
{
    protected static string $resource = TimezoneResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
