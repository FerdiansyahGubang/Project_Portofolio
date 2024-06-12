<?php

namespace App\Filament\Resources\KemahiranResource\Pages;

use App\Filament\Resources\KemahiranResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKemahirans extends ListRecords
{
    protected static string $resource = KemahiranResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
