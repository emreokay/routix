<?php


namespace Emreokay\Routix\Providers\Traits;


use Emreokay\Routix\Console\RoutixGenerateCommand;
use Emreokay\Routix\Support\Facades\Path;

trait BootTrait
{
    protected function loadRoutes()
    {
        $this->loadRoutesFrom(Path::path('/routes/web.php'));
    }

    protected function loadViews()
    {
        $this->loadViewsFrom(Path::path('/resources/views'),'routix');
    }

    protected function loadCommands()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                RoutixGenerateCommand::class,
            ]);
        }
    }
}
