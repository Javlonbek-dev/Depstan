<?php

namespace App\Filament\Resources\StateBudgetResource\Pages;

use App\Filament\Resources\StateBudgetResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStateBudget extends EditRecord
{
    protected static string $resource = StateBudgetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
