<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

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
        Blade::if('user', function () {
            $user = auth()->user();
            return $user && $user->is_admin == 0 && $user->is_pro == 0;
        });
        Blade::if('pro', function () {
            $user = auth()->user();
            return $user && $user->is_admin == 0 && $user->is_pro == 1;
        });
        Blade::if('admin', function () {
            $user = auth()->user();
            return $user && $user->is_admin == 1;
        });
    }
}
