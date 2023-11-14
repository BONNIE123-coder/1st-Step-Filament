<?php

namespace App\Filament\App\Resources\EmployeesResource\Pages;

use App\Filament\App\Resources\EmployeesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEmployees extends EditRecord
{
    protected static string $resource = EmployeesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
