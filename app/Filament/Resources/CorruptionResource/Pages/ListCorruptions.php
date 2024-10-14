<?php

namespace App\Filament\Resources\CorruptionResource\Pages;

use App\Filament\Resources\CorruptionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCorruptions extends ListRecords
{
    protected static string $resource = CorruptionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
