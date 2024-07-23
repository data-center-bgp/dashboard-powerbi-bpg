<?php

namespace App\Filament\Resources\FuelRetailDashboardResource\Pages;

use App\Filament\Resources\FuelRetailDashboardResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFuelRetailDashboards extends ListRecords
{
    protected static string $resource = FuelRetailDashboardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
