<?php

namespace App\Filament\Resources\OpenDataResource\Pages;

use App\Filament\Resources\OpenDataResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOpenData extends EditRecord
{
    protected static string $resource = OpenDataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
