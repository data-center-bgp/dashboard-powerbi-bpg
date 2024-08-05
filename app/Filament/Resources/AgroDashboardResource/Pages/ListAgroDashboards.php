<?php

namespace App\Filament\Resources\AgroDashboardResource\Pages;

use App\Filament\Resources\AgroDashboardResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAgroDashboards extends ListRecords
{
    protected static string $resource = AgroDashboardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Add New Data'),
        ];
    }
}
