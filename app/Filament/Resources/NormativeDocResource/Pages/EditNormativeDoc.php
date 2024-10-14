<?php

namespace App\Filament\Resources\NormativeDocResource\Pages;

use App\Filament\Resources\NormativeDocResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNormativeDoc extends EditRecord
{
    protected static string $resource = NormativeDocResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
