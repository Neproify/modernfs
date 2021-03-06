<?php

namespace ModernFS\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class PaginationServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        Paginator::$defaultView = 'pagination::bootstrap-4';
        Paginator::$defaultSimpleView = 'pagination::bootstrap-4';
    }
}
