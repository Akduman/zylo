<?php

namespace Zylo\Pattern;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\ServiceProvider;
use Zylo\Pattern\Commands\TestCommand2;

class ZyloServiceProvider extends ServiceProvider
{
    

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {        
        
        if ($this->app->runningInConsole()) {
            $this->commands([
                TestCommand2::class,
            ]);
        }
    }

}
