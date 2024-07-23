<?php

namespace App\Filament\Resources\ShorebaseDashboardResource\Pages;

use App\Filament\Resources\ShorebaseDashboardResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditShorebaseDashboard extends EditRecord
{
    protected static string $resource = ShorebaseDashboardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
