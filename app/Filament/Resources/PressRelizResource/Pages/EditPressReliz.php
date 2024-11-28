<?php

namespace App\Filament\Resources\PressRelizResource\Pages;

use App\Filament\Resources\PressRelizResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPressReliz extends EditRecord
{
    protected static string $resource = PressRelizResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
