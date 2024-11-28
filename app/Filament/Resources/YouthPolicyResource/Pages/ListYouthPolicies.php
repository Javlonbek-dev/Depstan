<?php

namespace App\Filament\Resources\YouthPolicyResource\Pages;

use App\Filament\Resources\YouthPolicyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListYouthPolicies extends ListRecords
{
    protected static string $resource = YouthPolicyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
