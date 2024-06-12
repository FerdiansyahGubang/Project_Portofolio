<?php

namespace App\Filament\Resources\KemahiranResource\Pages;

use App\Filament\Resources\KemahiranResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKemahiran extends EditRecord
{
    protected static string $resource = KemahiranResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
