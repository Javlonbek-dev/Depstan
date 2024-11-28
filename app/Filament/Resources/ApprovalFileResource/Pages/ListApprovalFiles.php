<?php

namespace App\Filament\Resources\ApprovalFileResource\Pages;

use App\Filament\Resources\ApprovalFileResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListApprovalFiles extends ListRecords
{
    protected static string $resource = ApprovalFileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
