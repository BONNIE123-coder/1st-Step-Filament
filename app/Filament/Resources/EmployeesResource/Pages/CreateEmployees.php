<?php

namespace App\Filament\Resources\EmployeesResource\Pages;

use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\EmployeesResource;

class CreateEmployees extends CreateRecord
{
    protected static string $resource = EmployeesResource::class;

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Employee created.')
            ->body('The Employee created successfully.');
    }
}
