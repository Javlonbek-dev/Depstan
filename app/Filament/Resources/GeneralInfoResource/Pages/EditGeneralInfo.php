<?php

namespace App\Filament\Resources\GeneralInfoResource\Pages;

use App\Filament\Resources\GeneralInfoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGeneralInfo extends EditRecord
{
    protected static string $resource = GeneralInfoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
