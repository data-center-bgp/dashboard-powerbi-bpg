<?php

namespace App\Filament\Resources\GasDashboardResource\Pages;

use App\Filament\Resources\GasDashboardResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGasDashboard extends EditRecord
{
    protected static string $resource = GasDashboardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
