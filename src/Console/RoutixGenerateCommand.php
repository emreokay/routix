<?php


namespace Emreokay\Routix\Console;


use Emreokay\Routix\Support\Facades\Routix;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class RoutixGenerateCommand extends Command
{
    /**
     * @var string
     */
    protected $signature = 'routix:generate';

    /**
     * @var string
     */
    protected $description = 'Routix API doc generator';

    public function handle()
    {
        $this->info(trans('routix::command.started'));
        Artisan::call('route:cache');
        $this->info(trans('routix::command.continued'));
        Routix::write();
        $this->info(trans('routix::command.ended'));
    }
}
