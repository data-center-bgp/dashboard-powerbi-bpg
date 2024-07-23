<?php

namespace App\Filament\Resources\SupplyChainDashboardResource\Pages;

use App\Filament\Resources\SupplyChainDashboardResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSupplyChainDashboard extends EditRecord
{
    protected static string $resource = SupplyChainDashboardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
