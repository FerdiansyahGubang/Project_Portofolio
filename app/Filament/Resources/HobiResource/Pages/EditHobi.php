<?php

namespace App\Filament\Resources\HobiResource\Pages;

use App\Filament\Resources\HobiResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHobi extends EditRecord
{
    protected static string $resource = HobiResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
