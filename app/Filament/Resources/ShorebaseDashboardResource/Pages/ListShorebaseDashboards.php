<?php

namespace App\Filament\Resources\ShorebaseDashboardResource\Pages;

use App\Filament\Resources\ShorebaseDashboardResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListShorebaseDashboards extends ListRecords
{
    protected static string $resource = ShorebaseDashboardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Add New Data'),
        ];
    }
}
