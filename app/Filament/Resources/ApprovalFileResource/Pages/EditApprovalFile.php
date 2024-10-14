<?php

namespace App\Filament\Resources\ApprovalFileResource\Pages;

use App\Filament\Resources\ApprovalFileResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditApprovalFile extends EditRecord
{
    protected static string $resource = ApprovalFileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
