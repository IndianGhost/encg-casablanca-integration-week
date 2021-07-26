<?php


namespace App\Providers;


use Illuminate\Support\ServiceProvider;

class ClubRepoServiceProvide extends ServiceProvider
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
        $this->app->bind('App\Repositories\Club\ClubRepositoryInterface', 'App\Repositories\Club\ClubRepository');
    }
}
