<?php


namespace Emreokay\Routix;


use Emreokay\Routix\Providers\Traits\{BootTrait,RegisterTrait};
use Illuminate\Support\ServiceProvider;

class RoutixServiceProvider extends ServiceProvider
{
    use BootTrait, RegisterTrait;

    public function boot()
    {
        $this->loadViews();
        $this->loadRoutes();
        $this->loadCommands();
        $this->loadTranslations();
        $this->loadAssets();
    }

    public function register()
    {
        $this->registerFacades();
    }
}
