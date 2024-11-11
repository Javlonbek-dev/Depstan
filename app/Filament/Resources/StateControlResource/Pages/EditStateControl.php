<?php

namespace App\Filament\Resources\StateControlResource\Pages;

use App\Filament\Resources\StateControlResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStateControl extends EditRecord
{
    protected static string $resource = StateControlResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
