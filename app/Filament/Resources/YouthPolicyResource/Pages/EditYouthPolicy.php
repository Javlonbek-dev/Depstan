<?php

namespace App\Filament\Resources\YouthPolicyResource\Pages;

use App\Filament\Resources\YouthPolicyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditYouthPolicy extends EditRecord
{
    protected static string $resource = YouthPolicyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
