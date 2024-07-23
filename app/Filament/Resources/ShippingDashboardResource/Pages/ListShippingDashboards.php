<?php

namespace App\Filament\Resources\ShippingDashboardResource\Pages;

use App\Filament\Resources\ShippingDashboardResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListShippingDashboards extends ListRecords
{
    protected static string $resource = ShippingDashboardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
