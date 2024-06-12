<?php

namespace App\Filament\Resources\CoverResource\Pages;

use App\Filament\Resources\CoverResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCovers extends ListRecords
{
    protected static string $resource = CoverResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
