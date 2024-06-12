<?php

namespace App\Filament\Resources\RiwayatResource\Pages;

use App\Filament\Resources\RiwayatResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRiwayats extends ListRecords
{
    protected static string $resource = RiwayatResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
