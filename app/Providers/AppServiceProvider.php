<?php

namespace App\Providers;

use App\Models\Reservation;
use App\Models\Workspace;
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
        //
        $workspaces = Workspace::all();
        view()->share('workspaces', $workspaces);


        $reservations= Reservation::all();
        view()->share('reservations', $reservations);
    }
}
