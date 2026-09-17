<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\Users\UserResource;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        $totalUser = User::count();

        return [
            Stat::make('Users', $totalUser)
                ->description('Total registered users')
                ->descriptionIcon('heroicon-m-users')
                ->color('primary')
                ->url(UserResource::getUrl('index'))
                ->chart($this->randomChartData()),
        ];
    }

    private function randomChartData(int $points = 7, int $min = 1, int $max = 20): array
    {
        return collect(range(1, $points))
            ->map(fn() => random_int($min, $max))
            ->toArray();
    }
}
