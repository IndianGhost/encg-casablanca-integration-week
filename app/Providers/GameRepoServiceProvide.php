<?php


namespace App\Providers;


use Illuminate\Support\ServiceProvider;

class GameRepoServiceProvide extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Repositories\Game\GameRepositoryInterface', 'App\Repositories\Game\GameRepository');
    }
}
