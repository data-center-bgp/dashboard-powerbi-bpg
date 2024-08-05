<?php

namespace App\Filament\Resources\SupplyChainDashboardResource\Pages;

use App\Filament\Resources\SupplyChainDashboardResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSupplyChainDashboards extends ListRecords
{
    protected static string $resource = SupplyChainDashboardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Add New Data'),
        ];
    }
}
