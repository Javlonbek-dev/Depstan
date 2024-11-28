<?php

namespace App\Filament\Resources\HigherOrganResource\Pages;

use App\Filament\Resources\HigherOrganResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHigherOrgan extends EditRecord
{
    protected static string $resource = HigherOrganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
