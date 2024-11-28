<?php

namespace App\Filament\Resources\AcceptApplicationResource\Pages;

use App\Filament\Resources\AcceptApplicationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAcceptApplication extends EditRecord
{
    protected static string $resource = AcceptApplicationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
