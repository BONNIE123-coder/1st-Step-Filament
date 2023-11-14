<?php

namespace App\Filament\App\Resources\EmployeesResource\Pages;

use App\Filament\App\Resources\EmployeesResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateEmployees extends CreateRecord
{
    protected static string $resource = EmployeesResource::class;
}
