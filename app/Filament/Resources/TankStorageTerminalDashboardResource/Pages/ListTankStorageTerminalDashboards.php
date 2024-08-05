<?php

namespace App\Filament\Resources\TankStorageTerminalDashboardResource\Pages;

use App\Filament\Resources\TankStorageTerminalDashboardResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTankStorageTerminalDashboards extends ListRecords
{
    protected static string $resource = TankStorageTerminalDashboardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Add New Data'),
        ];
    }
}
