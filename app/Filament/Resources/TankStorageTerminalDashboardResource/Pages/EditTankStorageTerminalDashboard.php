<?php

namespace App\Filament\Resources\TankStorageTerminalDashboardResource\Pages;

use App\Filament\Resources\TankStorageTerminalDashboardResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTankStorageTerminalDashboard extends EditRecord
{
    protected static string $resource = TankStorageTerminalDashboardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
