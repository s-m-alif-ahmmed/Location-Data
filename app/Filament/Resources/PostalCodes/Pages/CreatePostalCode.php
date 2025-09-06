<?php

namespace App\Filament\Resources\PostalCodes\Pages;

use App\Filament\Resources\PostalCodes\PostalCodeResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePostalCode extends CreateRecord
{
    protected static string $resource = PostalCodeResource::class;
}
