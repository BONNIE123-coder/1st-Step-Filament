<?php

namespace App\Filament\Resources\EmployeesResource\Pages;

use App\Filament\Resources\EmployeesResource;
use App\Models\Employees;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\ListRecords\Tab;
use Illuminate\Database\Eloquent\Builder;

class ListEmployees extends ListRecords
{
    protected static string $resource = EmployeesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return [
            'All' => Tab::make(),
            'This Week' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('date_hired', '>=', now()->subWeek()))
                ->badge(Employees::query()->where('date_hired', '>=', now()->subWeek())->count()),
            'This Month' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('date_hired', '>=', now()->subMonth()))
                ->badge(Employees::query()->where('date_hired', '>=', now()->subMonth())->count()),
            'This Year' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('date_hired', '>=', now()->subYear()))
                ->badge(Employees::query()->where('date_hired', '>=', now()->subYear())->count()),
        ];
    }
}

