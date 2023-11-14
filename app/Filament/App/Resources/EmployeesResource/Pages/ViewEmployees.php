<?php

namespace App\Filament\App\Resources\EmployeesResource\Pages;

use App\Filament\App\Resources\EmployeesResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewEmployees extends ViewRecord
{
    protected static string $resource = EmployeesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
