<?php

namespace App\Filament\Resources\AgroDashboardResource\Pages;

use App\Filament\Resources\AgroDashboardResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAgroDashboard extends EditRecord
{
    protected static string $resource = AgroDashboardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
