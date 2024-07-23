<?php

namespace App\Filament\Resources\ShipyardDashboardResource\Pages;

use App\Filament\Resources\ShipyardDashboardResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListShipyardDashboards extends ListRecords
{
    protected static string $resource = ShipyardDashboardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
