<?php

namespace Zylo\Pattern;


use Illuminate\Support\ServiceProvider;
use Zylo\Pattern\app\Commands\BaseRepositoryArtisan;
use Zylo\Pattern\App\Commands\CollectionArtisan;
use Zylo\Pattern\App\Commands\ControllerArtisan;
use Zylo\Pattern\App\Commands\FactoryArtisan;
use Zylo\Pattern\App\Commands\MigrationArtisan;
use Zylo\Pattern\App\Commands\ModelArtisan;
use Zylo\Pattern\App\Commands\ModelRepositoryArtisan;
use Zylo\Pattern\App\Commands\RequestStoreArtisan;
use Zylo\Pattern\App\Commands\ResourceArtisan;
use Zylo\Pattern\App\Commands\SeedArtisan;

class ZyloServiceProvider extends ServiceProvider
{
    public static function package_path()
    {
        return __DIR__."\\";
    }
    

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
        $this->loadRoutesFrom(__DIR__."/route/api.php");
        $this->loadMigrationsFrom(__DIR__."/database/migrations/");
        if ($this->app->runningInConsole()) {
            $this->commands([
                BaseRepositoryArtisan::class,
                ModelRepositoryArtisan::class,
                ModelArtisan::class,
                ControllerArtisan::class,
                RequestStoreArtisan::class,
                MigrationArtisan::class,
               // FactoryArtisan::class,
               // SeedArtisan::class,
               ResourceArtisan::class,
               CollectionArtisan::class,
               
                
            ]);
        }
    }

}
