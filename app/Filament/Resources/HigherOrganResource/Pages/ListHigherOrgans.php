<?php

namespace App\Filament\Resources\HigherOrganResource\Pages;

use App\Filament\Resources\HigherOrganResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHigherOrgans extends ListRecords
{
    protected static string $resource = HigherOrganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
