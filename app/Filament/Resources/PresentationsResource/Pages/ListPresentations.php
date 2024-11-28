<?php

namespace App\Filament\Resources\PresentationsResource\Pages;

use App\Filament\Resources\PresentationsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPresentations extends ListRecords
{
    protected static string $resource = PresentationsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
