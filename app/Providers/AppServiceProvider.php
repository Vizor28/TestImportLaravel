<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Libs\Vizor\Import;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Import\ImportTypeIntarface::class, function ($app) {
            return new Import\ImportXml();
        });

        $this->app->singleton(Import\ImportIntarface::class, function ($app) {
            $import = new Import\Import();
            $import->setImport($this->app->make(Import\ImportTypeIntarface::class));
            return $import;
        });
    }
}
