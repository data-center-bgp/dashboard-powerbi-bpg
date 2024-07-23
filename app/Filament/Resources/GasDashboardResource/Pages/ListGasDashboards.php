<?php

namespace App\Filament\Resources\GasDashboardResource\Pages;

use App\Filament\Resources\GasDashboardResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGasDashboards extends ListRecords
{
    protected static string $resource = GasDashboardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
