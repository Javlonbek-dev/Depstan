<?php

namespace App\Filament\Resources\PressRelizResource\Pages;

use App\Filament\Resources\PressRelizResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPressRelizs extends ListRecords
{
    protected static string $resource = PressRelizResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
