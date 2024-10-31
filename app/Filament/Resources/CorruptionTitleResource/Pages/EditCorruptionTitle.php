<?php

namespace App\Filament\Resources\CorruptionTitleResource\Pages;

use App\Filament\Resources\CorruptionTitleResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCorruptionTitle extends EditRecord
{
    protected static string $resource = CorruptionTitleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
