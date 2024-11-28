<?php

namespace App\Filament\Resources\AnalyticalResource\Pages;

use App\Filament\Resources\AnalyticalResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAnalyticals extends ListRecords
{
    protected static string $resource = AnalyticalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
