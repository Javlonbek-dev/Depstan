<?php

namespace App\Filament\Resources\StateControlResource\Pages;

use App\Filament\Resources\StateControlResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStateControls extends ListRecords
{
    protected static string $resource = StateControlResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
