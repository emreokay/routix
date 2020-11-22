<?php


namespace Emreokay\Routix\Providers\Traits;


use Emreokay\Routix\Console\RoutixGenerateCommand;
use Emreokay\Routix\Support\Facades\Path;
use Illuminate\Support\Facades\Route;

trait BootTrait
{
    protected function loadRoutes()
    {
        Route::prefix('routix')->name('routix.')->group(function () {
            $this->loadRoutesFrom(Path::to('/routes/web.php'));
        });
    }

    protected function loadViews()
    {
        $this->loadViewsFrom(Path::to('/resources/views'),'routix');
    }

    protected function loadTranslations()
    {
        $this->loadTranslationsFrom(Path::to('/resources/lang'), 'routix');
    }

    protected function loadCommands()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                RoutixGenerateCommand::class,
            ]);
        }
    }

    protected function loadAssets()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                Path::to('/resources/assets') => public_path('vendor/routix'),
            ], 'assets');
        }
    }
}
