<?php

namespace App\Filament\Widgets;

use App\Models\City;
use App\Models\Country;
use App\Models\Currency;
use App\Models\Language;
use App\Models\PostalCode;
use App\Models\State;
use App\Models\Timezone;
use App\Models\User;
use Carbon\Carbon;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DashboardOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make(
                'Total Users',
                // Get the total number of users
                User::where('role', 'User')->count()
            )
                ->description('New Users (' . Carbon::now()->format('F') . '): ' . User::where('role', 'User')->whereMonth('created_at', Carbon::now()->month)->count())
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success')
                ->chart(
                // Chart data for this month, with the count for each day in the current month
                    collect(range(0, Carbon::now()->daysInMonth - 1))
                        ->map(
                            fn($day) =>
                            User::where('role', 'User')
                                ->whereDate('created_at', Carbon::now()->startOfMonth()->addDays($day))
                                ->count()
                        )
                        ->toArray()
                )
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success'),

            Stat::make(
                'Total Admins',
                // Get the total number of users
                User::where('role', 'Admin')->count()
            )
                ->description('New Admins (' . Carbon::now()->format('F') . '): ' . User::where('role', 'Admin')->whereMonth('created_at', Carbon::now()->month)->count())
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success')
                ->chart(
                // Chart data for this month, with the count for each day in the current month
                    collect(range(0, Carbon::now()->daysInMonth - 1))
                        ->map(
                            fn($day) =>
                            User::where('role', 'Admin')
                                ->whereDate('created_at', Carbon::now()->startOfMonth()->addDays($day))
                                ->count()
                        )
                        ->toArray()
                )
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success'),

            Stat::make(
                'Total Countries',
                // Get the total number of Countries
                Country::count()
            )
                ->description('New Countries (' . Carbon::now()->format('F') . '): ' . Country::whereMonth('created_at', Carbon::now()->month)->count())
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success')
                ->chart(
                // Chart data for this month, with the count for each day in the current month
                    collect(range(0, Carbon::now()->daysInMonth - 1))
                        ->map(
                            fn($day) =>
                            Country::whereDate('created_at', Carbon::now()->startOfMonth()->addDays($day))
                                ->count()
                        )
                        ->toArray()
                )
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success'),

            Stat::make(
                'Total States',
                // Get the total number of States
                State::count()
            )
                ->description('New States (' . Carbon::now()->format('F') . '): ' . State::whereMonth('created_at', Carbon::now()->month)->count())
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success')
                ->chart(
                // Chart data for this month, with the count for each day in the current month
                    collect(range(0, Carbon::now()->daysInMonth - 1))
                        ->map(
                            fn($day) =>
                            State::whereDate('created_at', Carbon::now()->startOfMonth()->addDays($day))
                                ->count()
                        )
                        ->toArray()
                )
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success'),

            Stat::make(
                'Total Cities',
                // Get the total number of Cities
                City::count()
            )
                ->description('New Cities (' . Carbon::now()->format('F') . '): ' . City::whereMonth('created_at', Carbon::now()->month)->count())
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success')
                ->chart(
                // Chart data for this month, with the count for each day in the current month
                    collect(range(0, Carbon::now()->daysInMonth - 1))
                        ->map(
                            fn($day) =>
                            City::whereDate('created_at', Carbon::now()->startOfMonth()->addDays($day))
                                ->count()
                        )
                        ->toArray()
                )
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success'),

            Stat::make(
                'Total Postal Codes',
                // Get the total number of Postal Codes
                PostalCode::count()
            )
                ->description('New Postal Codes (' . Carbon::now()->format('F') . '): ' . PostalCode::whereMonth('created_at', Carbon::now()->month)->count())
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success')
                ->chart(
                // Chart data for this month, with the count for each day in the current month
                    collect(range(0, Carbon::now()->daysInMonth - 1))
                        ->map(
                            fn($day) =>
                            PostalCode::whereDate('created_at', Carbon::now()->startOfMonth()->addDays($day))
                                ->count()
                        )
                        ->toArray()
                )
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success'),

            Stat::make(
                'Total Timezones',
                // Get the total number of Timezones
                Timezone::count()
            )
                ->description('New Timezones (' . Carbon::now()->format('F') . '): ' . Timezone::whereMonth('created_at', Carbon::now()->month)->count())
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success')
                ->chart(
                // Chart data for this month, with the count for each day in the current month
                    collect(range(0, Carbon::now()->daysInMonth - 1))
                        ->map(
                            fn($day) =>
                            Timezone::whereDate('created_at', Carbon::now()->startOfMonth()->addDays($day))
                                ->count()
                        )
                        ->toArray()
                )
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success'),

            Stat::make(
                'Total Currencies',
                // Get the total number of users
                Currency::count()
            )
                ->description('New Currencies (' . Carbon::now()->format('F') . '): ' . Currency::whereMonth('created_at', Carbon::now()->month)->count())
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success')
                ->chart(
                // Chart data for this month, with the count for each day in the current month
                    collect(range(0, Carbon::now()->daysInMonth - 1))
                        ->map(
                            fn($day) =>
                            Currency::whereDate('created_at', Carbon::now()->startOfMonth()->addDays($day))
                                ->count()
                        )
                        ->toArray()
                )
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success'),


            Stat::make(
                'Total Languages',
                // Get the total number of Languages
                Language::count()
            )
                ->description('New Languages (' . Carbon::now()->format('F') . '): ' . Language::whereMonth('created_at', Carbon::now()->month)->count())
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success')
                ->chart(
                // Chart data for this month, with the count for each day in the current month
                    collect(range(0, Carbon::now()->daysInMonth - 1))
                        ->map(
                            fn($day) =>
                            Language::whereDate('created_at', Carbon::now()->startOfMonth()->addDays($day))
                                ->count()
                        )
                        ->toArray()
                )
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success'),

        ];
    }
}
