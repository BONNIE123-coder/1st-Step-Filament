<?php

namespace App\Filament\App\Resources\EmployeesResource\Pages;

use App\Filament\App\Resources\EmployeesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEmployees extends ListRecords
{
    protected static string $resource = EmployeesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
