<?php

namespace App\Filament\Widgets;

use App\Models\Vehicle;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class FleetUsageChart extends BaseWidget
{
    protected int|string|array $columnSpan = 'full';

    protected function getCards(): array
    {
        $totalVehicles = Vehicle::count();
        $activeVehicles = Vehicle::whereHas('licenses', function ($query) {
            $query->where('status', 'active');
        })->count();
        $inactiveVehicles = $totalVehicles - $activeVehicles;

        return [
            Stat::make('Total Vehicles', $totalVehicles)
                ->description('Total number of vehicles')
                ->color('primary'),
            Stat::make('Active Vehicles', $activeVehicles)
                ->description('Vehicles with an active license')
                ->descriptionIcon('heroicon-m-check-circle')
                ->color('success'),
            Stat::make('Inactive Vehicles', $inactiveVehicles)
                ->description('Vehicles without an active license')
                ->descriptionIcon('heroicon-m-exclamation-circle')
                ->color('danger'),
        ];
    }
}
