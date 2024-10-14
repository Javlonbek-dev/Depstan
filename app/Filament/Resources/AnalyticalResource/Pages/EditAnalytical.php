<?php

namespace App\Filament\Resources\AnalyticalResource\Pages;

use App\Filament\Resources\AnalyticalResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAnalytical extends EditRecord
{
    protected static string $resource = AnalyticalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
