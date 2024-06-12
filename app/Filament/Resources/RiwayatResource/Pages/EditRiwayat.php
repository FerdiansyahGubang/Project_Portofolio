<?php

namespace App\Filament\Resources\RiwayatResource\Pages;

use App\Filament\Resources\RiwayatResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRiwayat extends EditRecord
{
    protected static string $resource = RiwayatResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
