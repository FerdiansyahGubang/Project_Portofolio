<?php

namespace App\Filament\Resources\CoverResource\Pages;

use App\Filament\Resources\CoverResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCover extends EditRecord
{
    protected static string $resource = CoverResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
