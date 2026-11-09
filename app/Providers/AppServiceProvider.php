<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::preventLazyLoading(! app()->isProduction());

        Carbon::macro('getSouthernSeasonName', function (): string {
            $monthAndDay = (int) $this->format('md');

            return match (true) {
                $monthAndDay >= 1221 || $monthAndDay < 320 => 'Verão',
                $monthAndDay >= 922 => 'Primavera',
                $monthAndDay >= 621 => 'Inverno',
                default => 'Outono',
            };
        });
    }
}
