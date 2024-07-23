<?php

namespace App\Filament\Resources\ShipyardDashboardResource\Pages;

use App\Filament\Resources\ShipyardDashboardResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditShipyardDashboard extends EditRecord
{
    protected static string $resource = ShipyardDashboardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
