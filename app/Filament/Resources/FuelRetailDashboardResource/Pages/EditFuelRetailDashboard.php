<?php

namespace App\Filament\Resources\FuelRetailDashboardResource\Pages;

use App\Filament\Resources\FuelRetailDashboardResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFuelRetailDashboard extends EditRecord
{
    protected static string $resource = FuelRetailDashboardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
